<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Expertise;
use App\Models\Slider;
use App\Helpers\Common;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use App\DataTables\ExpertiseDataTable;
use File;
use Str;

class ExpertiseController extends Controller {


public function index(ExpertiseDataTable $dataTable)
{
    return $dataTable->render('admin.experties.index');
}

public function create()
{

    return view('admin.experties.experties');
}


public function store(Request $request){

    $request->validate([
        'title' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],

       ],[
        'title.required' => "The title field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        'image.required' => "The image field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
      ]);

    $data = $request->all();

    try{
        $data['slug'] = Str::slug($data['title']);
        $expertise = Expertise::create($data);


        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),EXPERTIES_IMAGE_PATH);
            $expertise->image = $filename;
        } else {
            $expertise->image = null;
            throw new \Exception("The image is not valid.");
        }

        $expertise->save();

        return redirect()->route("experties.index")->with("success_message", "Expertise Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $expertise = Expertise::findOrFail($id);


    if($expertise){

        return view('admin.experties.experties',compact('expertise'));

    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'title' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],

        ],[
        'title.required' => "The title field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
        ]);

    $data = $request->all();
    try{

        $data['slug'] = Str::slug($data['title']);
        $expertise = Expertise::find($id);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),EXPERTIES_IMAGE_PATH,$expertise->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }
        $expertise->update($data);

        return redirect()->route("experties.index")->with("success_message", "Expertise Update Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{
        $expertise = Expertise::findOrFail($id);

        if (File::exists(EXPERTIES_IMAGE_PATH . $expertise->image)) {
            File::delete(EXPERTIES_IMAGE_PATH . $expertise->image);
        }
        Expertise::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Expertise deleted successfully!';

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

        $expertise = Expertise::find($data['id']);

        if ($expertise->status) {
            $expertise->status = 0;
        } else {
            $expertise->status = 1;
        }
        $expertise->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
