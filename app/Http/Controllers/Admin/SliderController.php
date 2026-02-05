<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Helpers\Common;
use App\Models\User;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\SliderDataTable;
use File;

class SliderController extends Controller {


public function index(SliderDataTable $dataTable)
{
    return $dataTable->render('admin.slider.index');
}

public function create()
{

    return view('admin.slider.slider');
}


public function store(Request $request){

    $request->validate([
        'title' => ['required'],
        'description' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],

       ],[
        'title.required' => "The title field is required",
        'description.required' => "The description field is required",
        'image.required' => "The image field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
      ]);

    $data = $request->all();

    try{

        $slider = Slider::create($data);
        $slider->link = $data['link'] ?? '#';
        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),SLIDER_IMAGE_PATH);
            $slider->image = $filename;
        } else {
            $slider->image = null;
            throw new \Exception("The image is not valid.");
        }

        $slider->save();

        return redirect()->route("slider.index")->with("success_message", "Slider Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

    $slider = Slider::findOrFail($id);

    if($slider){

        return view('admin.slider.slider',compact('slider'));

    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'title' => ['required'],
        'description' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],

        ],[
        'title.required' => "The title field is required",
        'description.required' => "The description field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
        ]);

    $data = $request->all();
    try{


        $slider = Slider::find($id);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),SLIDER_IMAGE_PATH,$slider->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }
        $data['link'] = $data['link'] ?? '#';

        $slider->update($data);

        return redirect()->route("slider.index")->with("success_message", "Slider Update Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{
        $slider = Slider::findOrFail($id);

        if (File::exists(SLIDER_IMAGE_PATH . $slider->image)) {
            File::delete(SLIDER_IMAGE_PATH . $slider->image);
        }
        Slider::destroy($id);
            $response['success'] = true;
            $response['message'] = 'Slider deleted successfully!';

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

        $slider = Slider::find($data['id']);

        if ($slider->status) {
            $slider->status = 0;
        } else {
            $slider->status = 1;
        }
        $slider->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}
}
