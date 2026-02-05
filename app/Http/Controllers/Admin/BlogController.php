<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\BlogDataTable;
use App\Models\Blog;
use COM;
use File;
use Illuminate\Validation\Rule;
use Str;

class BlogController extends Controller {


public function index(BlogDataTable $dataTable)
{
    return $dataTable->render('admin.blog.index');
}

public function create(){

    $categories = BlogCategory::active()->pluck('name', 'id')->toArray();

    return view('admin.blog.blog',compact('categories'));
}


public function store(Request $request){

       $request->validate([
        'title' => ['required', Rule::unique('blog', 'title')],
        'blog_category_id' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],
        'posted_by_image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],
        'posted_by' => ['required'],
        'date' => ['required'],

        ],[
        'title.required' => "The title field is required",
        'blog_category_id.required' => "The category field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        'posted_by.required' => "The posted by field is required",
        'date.required' => "The date field is required",
        ]);
    $data = $request->all();

    try{

        $data['slug'] = Str::slug($data['title']);
        $category = Blog::create($data);

        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),BLOG_IMAGE_PATH);
            $category->image = $filename;
        } else {
            $category->image = null;
            throw new \Exception("The image is not valid.");
        }

        if ($request->file('posted_by_image')->isValid()) {
            $filename = Common::uploadFile($request->file('posted_by_image'),BLOG_IMAGE_PATH);
            $category->posted_by_image = $filename;
        } else {
            $category->posted_by_image = null;
            throw new \Exception("The image is not valid.");
        }



        $category->save();

        return redirect()->route("blog.index")->with("success_message", "Blog Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

     $categories = BlogCategory::active()->pluck('name', 'id')->toArray();
    $blog = Blog::findOrFail($id);

    if($blog){

        return view('admin.blog.blog',compact('blog','categories'));
    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'title' => ['required', Rule::unique('blog', 'title')->ignore($id)],
        'blog_category_id' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
        'posted_by_image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
        'posted_by' => ['required'],
        'date' => ['required'],

        ],[
        'title.required' => "The title field is required",
        'blog_category_id.required' => "The category field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        'posted_by.required' => "The posted by field is required",
        'date.required' => "The date field is required",
        ]);

    $data = $request->all();
    try{


        $blog = Blog::find($id);
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),BLOG_IMAGE_PATH,$category->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }


        if ($request->hasFile('posted_by_image')) {

            if ($request->file('posted_by_image')->isValid()) {
                $filename = Common::uploadFile($request->file('posted_by_image'),BLOG_IMAGE_PATH,$category->posted_by_image);
                $data['posted_by_image'] = $filename;
            } else {
                $data['posted_by_image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }

        $blog->update($data);

        return redirect()->route("blog.index")->with("success_message", "Blog Update Successfully.");
    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{


         $blog = Blog::findOrFail($id);

        if (File::exists(BLOG_IMAGE_PATH . $blog->image)) {
            File::delete(BLOG_IMAGE_PATH . $blog->image);
        }
        if (File::exists(BLOG_IMAGE_PATH . $blog->posted_by_image)) {
            File::delete(BLOG_IMAGE_PATH . $blog->posted_by_image);
        }

        Blog::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Blog deleted successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
        // $response['message'] = $ex->getMessage();
    }

    return response()->json($response);

}

public function changeStatus(Request $request){

    $data = $request->all();

    $response = ['success' => false, 'message' => ''];
    try{

        $blog = Blog::find($data['id']);

        if ($blog->status) {
            $blog->status = 0;
        } else {
            $blog->status = 1;
        }
        $blog->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
