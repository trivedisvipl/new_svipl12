<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\ContactDataTable;
use App\Models\Contact;
use COM;
use File;

class ContactController extends Controller {


public function index(ContactDataTable $dataTable)
{
    return $dataTable->render('admin.contact.index');
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{

        Contact::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Contact deleted successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
        // $response['message'] = $ex->getMessage();
    }

    return response()->json($response);

}


}
