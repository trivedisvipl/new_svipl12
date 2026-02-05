<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\WorkCategoriesDataTable;
use COM;
use File;
use Illuminate\Validation\Rule;
use Spatie\Html\Elements\P;
use Str;

class WorkCategoriesController extends Controller {


public function index(WorkCategoriesDataTable $dataTable)
{
    return $dataTable->render('admin.work.category.index');
}

public function create()
{

    return view('admin.work.category.category');
}


public function store(Request $request){

    $request->validate([

        'name' => ['required', Rule::unique('portfolio_category', 'name')],

       ],[
        'name.required' => "The name field is required",
      ]);

    $data = $request->all();

    try{

        $data['slug'] = Str::slug($data['name']);
        $category = PortfolioCategory::create($data);

        $category->save();

        return redirect()->route("workcategories.index")->with("success_message", "Category Add Successfully.");
    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $category = PortfolioCategory::findOrFail($id);

    if($category){

        return view('admin.work.category.category',compact('category'));
    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'name' => ['required', Rule::unique('blog_category', 'name')->ignore($id)],

        ],[
        'name.required' => "The name field is required",
        ]);

    $data = $request->all();
    try{


        $category = PortfolioCategory::find($id);
        $data['slug'] = Str::slug($data['name']);


        $category->update($data);

        return redirect()->route("workcategories.index")->with("success_message", "Category Update Successfully.");
    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{


        PortfolioCategory::destroy($id);

            $response['success'] = true;
            $response['message'] = 'Category deleted successfully!';

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

        $category = PortfolioCategory::find($data['id']);

        if ($category->status) {
            $category->status = 0;
        } else {
            $category->status = 1;
        }
        $category->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
