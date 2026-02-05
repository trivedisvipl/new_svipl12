<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Expertise;
use App\Models\Testimonials;
use App\Helpers\Common;
use Validator;
use Illuminate\Http\Request;
use App\DataTables\TestimonialsDataTable;
use File;
use PHPUnit\Metadata\Test;
use Str;

class TestimonialsController extends Controller {


public function index(TestimonialsDataTable $dataTable)
{
    return $dataTable->render('admin.testimonials.index');
}

public function create()
{

    return view('admin.testimonials.testimonials');
}


public function store(Request $request){

    $request->validate([
        'description' => ['required'],
        'name' => ['required'],
        'country' => ['required'],
        'position' => ['required'],

       ],[
        'description.required' => "The description field is required",
        'name.required' => "The name field is required",
        'country.required' => "The country field is required",
        'position.required' => "The position field is required",
      ]);

    $data = $request->all();

    try{

        $client = Testimonials::create($data);

        $client->save();

        return redirect()->route("testimonials.index")->with("success_message", "Client says Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $client = Testimonials::findOrFail($id);


    if($client){

        return view('admin.testimonials.testimonials',compact('client'));

    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'description' => ['required'],
        'name' => ['required'],
        'country' => ['required'],
        'position' => ['required'],

        ],[
        'description.required' => "The description field is required",
        'name.required' => "The name field is required",
        'country.required' => "The country field is required",
        'position.required' => "The position field is required",
        ]);

    $data = $request->all();
    try{

        $client = Testimonials::find($id);


        $client->update($data);

        return redirect()->route("testimonials.index")->with("success_message", "Client says Update Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{



        Testimonials::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Client says deleted successfully!';

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

        $client = Testimonials::find($data['id']);

        if ($client->status) {
            $client->status = 0;
        } else {
            $client->status = 1;
        }
        $client->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
