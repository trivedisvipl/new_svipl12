<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\TeamDataTable;
use App\Models\Team;
use File;

class TeamController extends Controller {


public function index(TeamDataTable $dataTable)
{
    return $dataTable->render('admin.team.index');
}

public function create()
{

    return view('admin.team.team');
}


public function store(Request $request){
    $request->validate([
        'name' => ['required'],
        'position' => ['required'],
        'description' => ['required'],
        'linkedin' => ['required'],
        'mail' => ['required'],
        'instagram' => ['required'],
        'twitter' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],

       ],[
        'name.required' => "The Name field is required",
        'description.required' => "The Sub Title field is required",
        'image.required' => "The image field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
      ]);

    $data = $request->all();

    try{

        $team = Team::create($data);

        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),TEAM_IMAGE_PATH);
            $team->image = $filename;
        } else {
            $team->image = null;
            throw new \Exception("The image is not valid.");
        }

        $team->save();

        return redirect()->route("team.index")->with("success_message", "Team Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $team = Team::findOrFail($id);

    if($team){

        return view('admin.team.team',compact('team'));

    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

     $request->validate([
        'name' => ['required'],
        'position' => ['required'],
        'description' => ['required'],
        'linkedin' => ['required'],
        'mail' => ['required'],
        'instagram' => ['required'],
        'twitter' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],

       ],[
        'name.required' => "The Name field is required",
        'description.required' => "The Sub Title field is required",
        'image.required' => "The image field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
      ]);

    $data = $request->all();
    try{


        $team = Team::find($id);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),TEAM_IMAGE_PATH,$team->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }
        $team->update($data);

        return redirect()->route("team.index")->with("success_message", "Team Update Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{
        $team = Team::findOrFail($id);

        if (File::exists(TEAM_IMAGE_PATH . $team->image)) {
            File::delete(TEAM_IMAGE_PATH . $team->image);
        }
        Team::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Team deleted successfully!';

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

        $team = Team::find($data['id']);

        if ($team->status) {
            $team->status = 0;
        } else {
            $team->status = 1;
        }
        $team->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
