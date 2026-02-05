<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\CareersDataTable;
use App\Models\Career;
use COM;
use File;

class CareersController extends Controller {


public function index(CareersDataTable $dataTable)
{
    return $dataTable->render('admin.careers.index');
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{
        $career = Career::findOrFail($id);

        if (File::exists(CAREER_PDF_PATH . $career->resume)) {
            File::delete(CAREER_PDF_PATH . $career->resume);
        }
        Career::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Career deleted successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
        // $response['message'] = $ex->getMessage();
    }

    return response()->json($response);

}

public function destroy1($id){

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
