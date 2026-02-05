<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\ClientDataTable;
use COM;
use File;

class ClientController extends Controller {


public function index(ClientDataTable $dataTable)
{
    return $dataTable->render('admin.client.index');
}

public function create()
{

    return view('admin.client.client');
}


public function store(Request $request){

    $request->validate([
        'name' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],

       ],[
        'name.required' => "The name field is required",
        'image.required' => "The image field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
      ]);

    $data = $request->all();

    try{

        $client = Client::create($data);

        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),CLIENT_IMAGE_PATH);
            $client->image = $filename;
        } else {
            $client->image = null;
            throw new \Exception("The image is not valid.");
        }

        $client->save();

        return redirect()->route("clients.index")->with("success_message", "Client Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $client = Client::findOrFail($id);

    if($client){

        return view('admin.client.client',compact('client'));

    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'name' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],

        ],[
        'name.required' => "The name field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
        ]);

    $data = $request->all();
    try{


        $client = Client::find($id);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),CLIENT_IMAGE_PATH,$client->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }
        $client->update($data);

        return redirect()->route("clients.index")->with("success_message", "Client Update Successfully.");
    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{
        $client = Client::findOrFail($id);

        if (File::exists(CLIENT_IMAGE_PATH . $client->image)) {
            File::delete(CLIENT_IMAGE_PATH . $client->image);
        }
        Client::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Client deleted successfully!';

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

        $client = Client::find($data['id']);

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
