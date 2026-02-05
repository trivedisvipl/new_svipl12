<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Helpers\Common;
use App\Models\Work;
use Validator;
//use DataTables;
use Illuminate\Http\Request;
use App\DataTables\WorkDataTable;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use COM;
use File;
use Illuminate\Validation\Rule;
use Spatie\Html\Elements\P;
use Str;

class WorkController extends Controller {


public function index(WorkDataTable $dataTable)
{
    return $dataTable->render('admin.work.index');
}

public function create(){

    $categories = PortfolioCategory::active()->pluck('name', 'id')->toArray();

    return view('admin.work.work',compact('categories'));
}


public function store(Request $request){

       $request->validate([
        'title' => ['required', Rule::unique('portfolio', 'title')],
        'portfolio_category_id' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['required','file', 'image', 'mimes:jpeg,jpg,png,webp'],

        ],[
        'title.required' => "The title field is required",
        'portfolio_category_id.required' => "The category field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        ]);
    $data = $request->all();

    try{

        $data['slug'] = Str::slug($data['title']);

        $work = Portfolio::create($data);

        if ($request->file('image')->isValid()) {
            $filename = Common::uploadFile($request->file('image'),WORK_IMAGE_PATH);
            $work->image = $filename;
        } else {
            $work->image = null;
            throw new \Exception("The image is not valid.");
        }

        $work->save();

          $session_id = session()->getId();
            PortfolioImage::where('sess_id', $session_id)->update(['portfolio_id' => $work->id, 'sess_id' => NULL]);

            $oldName = WORK_IMAGE_PATH . $session_id;
            $newName = WORK_IMAGE_PATH . $work->id;
            if (is_dir($oldName)) {
                rename($oldName, $newName);
            }

        return redirect()->route("work.index")->with("success_message", "Work Add Successfully.");

    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}


public function edit(Request $request, $id){

     $categories = PortfolioCategory::active()->pluck('name', 'id')->toArray();
    $work = Portfolio::findOrFail($id);

    if($work){

        return view('admin.work.work',compact('work','categories'));
    }else{
        return redirect()->back()->with("error_message", "something went wrong please try again")->withInput();
    }

}


public function update(Request $request, $id){

    $request->validate([
        'title' => ['required', Rule::unique('portfolio', 'title')->ignore($id)],
        'portfolio_category_id' => ['required'],
        'short_description' => ['required'],
        'description' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],


        ],[
        'title.required' => "The title field is required",
        'portfolio_category_id.required' => "The category field is required",
        'short_description.required' => "The short description field is required",
        'description.required' => "The description field is required",
        ]);

    $data = $request->all();
    try{


        $portfolio = Portfolio::find($id);

        $data['slug'] = Str::slug($data['title']);
          if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),WORK_IMAGE_PATH,$portfolio->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }

        $portfolio->update($data);

        return redirect()->route("work.index")->with("success_message", "Work Update Successfully.");
    } catch (\Exception $ex) {
        return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }
}

public function destroy($id){

    $response = ['success' => false, 'message' => ''];
    try{


         $work = Portfolio::findOrFail($id);

         if ($work) {
                $work->delete();

                $folder = WORK_IMAGE_PATH . $id . '/';
                if (is_dir($folder)) {
                    Common::rmdirectory($folder);
                }
                $response['success'] = true;
                $response['message'] = 'Work deleted successfully!';
            } else {
                $response['message'] = "Work not found";
            }



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

        $work = Portfolio::find($data['id']);

        if ($work->status) {
            $work->status = 0;
        } else {
            $work->status = 1;
        }
        $work->save();

        $response['success'] = true;
        $response['message'] = 'Status changed successfully!';

    } catch (\Exception $ex) {
        $response['message'] = "Something went wrong !";
    }

    return response()->json($response);

}


 function storeWorkImage(Request $request)
    {
        if ($request->has('portfolio_id')) {
            $portfolioId = $request->get('portfolio_id');
        } else {
            $portfolioId = session()->getId();
        }

        try{
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $ext = strtolower($file->getClientOriginalExtension());
                $filename = date('YmdHis') . uniqid() . '.' . $ext;
                $targetPath = WORK_IMAGE_PATH . $portfolioId . '/';
                // dd($targetPath);
                Common::makeDirectory($targetPath, 0777);
                $filename = Common::uploadFile($request->file('file'),$targetPath);

                $originalFile = $targetPath . $filename;

                if (File::exists($originalFile)) {
                    //get last display order for this property
                    if ($request->has('portfolio_id')) {
                        $rsImgOrder = PortfolioImage::select('disp_order')->where('portfolio_id', $portfolioId)->max('disp_order');
                    }else{
                        $rsImgOrder = PortfolioImage::select('disp_order')->where('sess_id', $portfolioId)->max('disp_order');
                    }

                    if ($rsImgOrder) {
                        $disp_order = ($rsImgOrder + 1);
                    }else{
                        $disp_order = 1;
                    }

                    $productImage = new PortfolioImage();
                    if ($request->has('portfolio_id')) {
                        $productImage->portfolio_id = $request->get('portfolio_id');
                        $productImage->sess_id = NULL;
                    } else {
                        $productImage->sess_id = session()->getId();
                    }
                    $productImage->image = $filename;
                    $productImage->disp_order = $disp_order;
                    $productImage->save();
                }


            } else {
                return response()->json(['status' => 'something was wrong!']);
            }
            return response()->json(['status' =>  $filename]);
        }catch (\Exception $ex) {
            return response()->json(['status' => $ex->getMessage()]);
        }
    }



    public function deleteImage(Request $request)
    {
        if ($request->has('portfolio_id')) {
            $portfolioId = $request->get('portfolio_id');
        } else {
            $portfolioId = session()->getId();
        }
        try{
            $folder = WORK_IMAGE_PATH . $portfolioId . '/';

            //start remove image code
            if ($request->has('imageId')) {
                $productImage = PortfolioImage::find($request->get('imageId'));
                $filename = $productImage->image;
                if (File::exists($folder . $filename)) {
                    File::delete($folder . $filename);
                }
                $productImage->delete();
                return response()->json(['status' => true]);

            }else{
                return response()->json(['status' => false]);
            }

        }catch (\Exception $ex) {
            return response()->json(['status' => $ex->getMessage()]);
        }
    }


    public function sortImage(Request $request)
    {
        try{
            $data = $request->all();
            $images = $data['images'];
            for ($i = 0; $i < count($images); $i++) {
                $workImg = PortfolioImage::find($images[$i]);
                $workImg->disp_order = $i + 1;
                $workImg->save();
            }
        }catch (\Exception $ex) {
            return response()->json(['status' => $ex->getMessage()]);
        }
    }


}
