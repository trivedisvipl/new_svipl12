<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CertificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Helpers\Common;
use App\Models\User;
use App\Models\Certification;
use App\Models\Setting;
use Validator;
use Illuminate\Http\Request;
use File;
use Ramsey\Collection\Set;

class SettingController extends Controller
{


    public function getHome(Request $request)
    {

        $home = Setting::where('page','home')->pluck('value','key')->toArray();

        return view('admin.setting.home',compact('home'));

    }

    public function storeHome(Request $request)
    {



         $rules = array(
             'fb' => 'required',
             'instagram' => 'required',
             'twitter' => 'required',
             'linkedin' => 'required',
             'phone1' => 'required',
             'phone2' => 'required',
             'email' => 'required|email',
             'about_description' => 'required',
             'footer_about' => 'required',
             'address' => 'required',
             'header_logo' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'about_image' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'footer_logo' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
         );

         $mess = array(
            'fb.required' => "The Facebook link field is required",
            'instagram.required' => "The Instagram link field is required",
            'twitter.required' => "The Twitter link field is required",
            'linkedin.required' => "The LinkedIn link field is required",
            'phone1.required' => "The Phone-1 field is required",
            'phone2.required' => "The Phone-2 field is required",
            'email.required' => "The Email field is required",
            'email.email' => "Please enter a valid email address",
            'about_description.required' => "The About Description field is required",
            'footer_about.required' => "The Footer About field is required",
            'address.required' => "The Address field is required",
            'header_logo.mimes' => "The header logo type must be jpeg,jpg,png and webp",
            'header_logo.image' => "The header logo type must be jpeg,jpg,png and webp",
            'about_image.mimes' => "The about image type must be jpeg,jpg,png and webp",
            'about_image.image' => "The about image type must be jpeg,jpg,png and webp",
            'footer_logo.mimes' => "The footer logo type must be jpeg,jpg,png and webp",
            'footer_logo.image' => "The footer logo type must be jpeg,jpg,png and webp",
         );

        $data = $request->all();

        $validator = Validator::make($data, $rules,$mess);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


         $old_contain = Setting::where('page','home');

         if ($request->hasFile('header_logo')) {
            $logo = $old_contain->where('key', 'header_logo')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('header_logo')->isValid()) {
                $filename = Common::uploadFile($request->file('header_logo'),SETTING_IMAGE_PATH,$logo);
                $data['header_logo'] = $filename;
            } else {
                $data['header_logo'] = null;
                throw new \Exception("The header_logo is not valid.");
            }

         }

        if ($request->hasFile('about_image')) {
            $logo = $old_contain->where('key', 'about_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('about_image')->isValid()) {
                $filename = Common::uploadFile($request->file('about_image'),SETTING_IMAGE_PATH,$logo);
                $data['about_image'] = $filename;
            } else {
                $data['about_image'] = null;
                throw new \Exception("The about_image is not valid.");
            }

        }

         if ($request->hasFile('footer_logo')) {
            $logo = $old_contain->where('key', 'footer_logo')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('footer_logo')->isValid()) {
                $filename = Common::uploadFile($request->file('footer_logo'),SETTING_IMAGE_PATH,$logo);
                $data['footer_logo'] = $filename;
            } else {
                $data['footer_logo'] = null;
                throw new \Exception("The footer_logo is not valid.");
            }

        }
          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'home','key' => $key],['value' => $val]);
        }

        $home = Setting::where('page','home')->pluck('value','key')->toArray();


         return redirect()->back()->with("success_message", "Home Page Content Updated Successfully.")->with('home', $home);
    }


     public function getWhy(Request $request)
    {

        $why = Setting::where('page','why-choose')->pluck('value','key')->toArray();

        return view('admin.setting.why',compact('why'));

    }

    public function storeWhy(Request $request)
    {

         $rules = array(
             'creative_agency_description' => 'required',
             'why_choose_heading' => 'required',
             'why_choose_description_1' => 'required',
             'why_choose_description_2' => 'required',
             'why_choose_description_3' => 'required',
             'why_choose_description_4' => 'required',
             'why_choose_description_5' => 'required',
             'why_choose_description_6' => 'required',
             'creative_agency_image' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_1' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_2' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_3' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_4' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_5' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'why_choose_image_6' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
         );

         $mess = array(
            'creative_agency_description.required' => "The Creative Agency Description field is required",
            'why_choose_heading.required' => "The Why Choose Heading field is required",
            'why_choose_description_1.required' => "The Why Choose Description 1 field is required",
            'why_choose_description_2.required' => "The Why Choose Description 2 field is required",
            'why_choose_description_3.required' => "The Why Choose Description 3 field is required",
            'why_choose_description_4.required' => "The Why Choose Description 4 field is required",
            'why_choose_description_5.required' => "The Why Choose Description 5 field is required",
            'why_choose_description_6.required' => "The Why Choose Description 6 field is required",
            'creative_agency_image.mimes' => "The creative agency image type must be jpeg,jpg,png and webp",
            'creative_agency_image.image' => "The creative agency image type must be jpeg,jpg,png and webp",
            'why_choose_image_1.mimes' => "The why choose image 1 type must be jpeg,jpg,png and webp",
            'why_choose_image_1.image' => "The why choose image 1 type must be jpeg,jpg,png and webp",
            'why_choose_image_2.mimes' => "The why choose image 2 type must be jpeg,jpg,png and webp",
            'why_choose_image_2.image' => "The why choose image 2 type must be jpeg,jpg,png and webp",
            'why_choose_image_3.mimes' => "The why choose image 3 type must be jpeg,jpg,png and webp",
            'why_choose_image_3.image' => "The why choose image 3 type must be jpeg,jpg,png and webp",
            'why_choose_image_4.mimes' => "The why choose image 4 type must be jpeg,jpg,png and webp",
            'why_choose_image_4.image' => "The why choose image 4 type must be jpeg,jpg,png and webp",
            'why_choose_image_5.mimes' => "The why choose image 5 type must be jpeg,jpg,png and webp",
            'why_choose_image_5.image' => "The why choose image 5 type must be jpeg,jpg,png and webp",
            'why_choose_image_6.mimes' => "The why choose image 6 type must be jpeg,jpg,png and webp",
            'why_choose_image_6.image' => "The why choose image 6 type must be jpeg,jpg,png and webp",
         );

        $data = $request->all();

        $validator = Validator::make($data, $rules,$mess);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


         $old_contain = Setting::where('page','why-choose');

         if ($request->hasFile('creative_agency_image')) {
            $logo = $old_contain->where('key', 'creative_agency_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('creative_agency_image')->isValid()) {
                $filename = Common::uploadFile($request->file('creative_agency_image'),SETTING_IMAGE_PATH,$logo);
                $data['creative_agency_image'] = $filename;
            } else {
                $data['creative_agency_image'] = null;
                throw new \Exception("The creative_agency_image is not valid.");
            }

         }

        if ($request->hasFile('why_choose_image_1')) {
            $logo = $old_contain->where('key', 'why_choose_image_1')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_1')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_1'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_1'] = $filename;
            } else {
                $data['why_choose_image_1'] = null;
                throw new \Exception("The why_choose_image_1 is not valid.");
            }

        }
         if ($request->hasFile('why_choose_image_2')) {
            $logo = $old_contain->where('key', 'why_choose_image_2')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_2')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_2'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_2'] = $filename;
            } else {
                $data['why_choose_image_2'] = null;
                throw new \Exception("The why_choose_image_2 is not valid.");
            }

        }
         if ($request->hasFile('why_choose_image_3')) {
            $logo = $old_contain->where('key', 'why_choose_image_3')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_3')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_3'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_3'] = $filename;
            } else {
                $data['why_choose_image_3'] = null;
                throw new \Exception("The why_choose_image_3 is not valid.");
            }

        }
         if ($request->hasFile('why_choose_image_4')) {
            $logo = $old_contain->where('key', 'why_choose_image_4')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_4')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_4'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_4'] = $filename;
            } else {
                $data['why_choose_image_4'] = null;
                throw new \Exception("The why_choose_image_4 is not valid.");
            }

        }
         if ($request->hasFile('why_choose_image_5')) {
            $logo = $old_contain->where('key', 'why_choose_image_5')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_5')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_5'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_5'] = $filename;
            } else {
                $data['why_choose_image_5'] = null;
                throw new \Exception("The why_choose_image_5 is not valid.");
            }

        }
         if ($request->hasFile('why_choose_image_6')) {
            $logo = $old_contain->where('key', 'why_choose_image_6')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('why_choose_image_6')->isValid()) {
                $filename = Common::uploadFile($request->file('why_choose_image_6'),SETTING_IMAGE_PATH,$logo);
                $data['why_choose_image_6'] = $filename;
            } else {
                $data['why_choose_image_6'] = null;
                throw new \Exception("The why_choose_image_6 is not valid.");
            }

        }
          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }


      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'why-choose','key' => $key],['value' => $val]);
        }

        $home = Setting::where('page','why-choose')->pluck('value','key')->toArray();


         return redirect()->back()->with("success_message", "Why Choose Page Content Updated Successfully.")->with('home', $home);
    }

       public function getMission(Request $request)
    {

        $vision = Setting::where('page','mission')->pluck('value','key')->toArray();

        return view('admin.setting.mission-vision',compact('vision'));

    }

    public function storeMission(Request $request)
    {

         $rules = array(
             'vision' => 'required',
             'mission' => 'required',
             'values_1' => 'required',
             'values_2' => 'required',
             'values_3' => 'required',
             'values_4' => 'required',
             'vision_image' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'mission_image' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'values_image_1' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'values_image_2' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'values_image_3' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'values_image_4' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
         );

         $mess = array(
            'vision.required' => "The Vision field is required",
            'mission.required' => "The Mission field is required",
            'values_1.required' => "The Values 1 field is required",
            'values_2.required' => "The Values 2 field is required",
            'values_3.required' => "The Values 3 field is required",
            'values_4.required' => "The Values 4 field is required",
            'vision_image.mimes' => "The vision image type must be jpeg,jpg,png and webp",
            'vision_image.image' => "The vision image type must be jpeg,jpg,png and webp",
            'mission_image.mimes' => "The mission image type must be jpeg,jpg,png and webp",
            'mission_image.image' => "The mission image type must be jpeg,jpg,png and webp",
            'values_image_1.mimes' => "The values image 1 type must be jpeg,jpg,png and webp",
            'values_image_1.image' => "The values image 1 type must be jpeg,jpg,png and webp",
            'values_image_2.mimes' => "The values image 2 type must be jpeg,jpg,png and webp",
            'values_image_2.image' => "The values image 2 type must be jpeg,jpg,png and webp",
            'values_image_3.mimes' => "The values image 3 type must be jpeg,jpg,png and webp",
            'values_image_3.image' => "The values image 3 type must be jpeg,jpg,png and webp",
            'values_image_4.mimes' => "The values image 4 type must be jpeg,jpg,png and webp",
            'values_image_4.image' => "The values image 4 type must be jpeg,jpg,png and webp",
         );

        $data = $request->all();

        $validator = Validator::make($data, $rules,$mess);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


         $old_contain = Setting::where('page','mission');

         if ($request->hasFile('vision_image')) {
            $logo = $old_contain->where('key', 'vision_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('vision_image')->isValid()) {
                $filename = Common::uploadFile($request->file('vision_image'),SETTING_IMAGE_PATH,$logo);
                $data['vision_image'] = $filename;
            } else {
                $data['vision_image'] = null;
                throw new \Exception("The vision_image is not valid.");
            }

         }

        if ($request->hasFile('mission_image')) {
            $logo = $old_contain->where('key', 'mission_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('mission_image')->isValid()) {
                $filename = Common::uploadFile($request->file('mission_image'),SETTING_IMAGE_PATH,$logo);
                $data['mission_image'] = $filename;
            } else {
                $data['mission_image'] = null;
                throw new \Exception("The mission_image is not valid.");
            }

        }
         if ($request->hasFile('values_image_1')) {
            $logo = $old_contain->where('key', 'values_image_1')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('values_image_1')->isValid()) {
                $filename = Common::uploadFile($request->file('values_image_1'),SETTING_IMAGE_PATH,$logo);
                $data['values_image_1'] = $filename;
            } else {
                $data['values_image_1'] = null;
                throw new \Exception("The values_image_1 is not valid.");
            }

        }
         if ($request->hasFile('values_image_2')) {
            $logo = $old_contain->where('key', 'values_image_2')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('values_image_2')->isValid()) {
                $filename = Common::uploadFile($request->file('values_image_2'),SETTING_IMAGE_PATH,$logo);
                $data['values_image_2'] = $filename;
            } else {
                $data['values_image_2'] = null;
                throw new \Exception("The values_image_2 is not valid.");
            }

        }
         if ($request->hasFile('values_image_3')) {
            $logo = $old_contain->where('key', 'values_image_3')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('values_image_3')->isValid()) {
                $filename = Common::uploadFile($request->file('values_image_3'),SETTING_IMAGE_PATH,$logo);
                $data['values_image_3'] = $filename;
            } else {
                $data['values_image_3'] = null;
                throw new \Exception("The values_image_3 is not valid.");
            }

        }
         if ($request->hasFile('values_image_4')) {
            $logo = $old_contain->where('key', 'values_image_4')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('values_image_4')->isValid()) {
                $filename = Common::uploadFile($request->file('values_image_4'),SETTING_IMAGE_PATH,$logo);
                $data['values_image_4'] = $filename;
            } else {
                $data['values_image_4'] = null;
                throw new \Exception("The values_image_4 is not valid.");
            }

        }
          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }



      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'mission','key' => $key],['value' => $val]);
        }

        $vision = Setting::where('page','mission')->pluck('value','key')->toArray();


         return redirect()->back()->with("success_message", "Mission & Vision Updated Successfully.")->with('vision', $vision);
    }

      public function getProcess(Request $request)
    {

        $process = Setting::where('page','process')->pluck('value','key')->toArray();

        return view('admin.setting.process',compact('process'));

    }

    public function storeProcess(Request $request)
    {

         $rules = array(
             'development_process_image' =>  ['file', 'image', 'mimes:jpeg,jpg,png,webp'],
             'process_description_1' => 'required',
             'process_description_2' => 'required',
         );

         $mess = array(
            'process_description_1.required' => "The Process Description 1 field is required",
            'process_description_2.required' => "The Process Description 2 field is required",
            'development_process_image.mimes' => "The development process image type must be jpeg,jpg,png and webp",
            'development_process_image.image' => "The development process image type must be jpeg,jpg,png and webp",
         );

        $data = $request->all();

        $validator = Validator::make($data, $rules,$mess);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


         $old_contain = Setting::where('page','process');

         if ($request->hasFile('development_process_image')) {
            $logo = $old_contain->where('key', 'development_process_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('development_process_image')->isValid()) {
                $filename = Common::uploadFile($request->file('development_process_image'),SETTING_IMAGE_PATH,$logo);
                $data['development_process_image'] = $filename;
            } else {
                $data['development_process_image'] = null;
                throw new \Exception("The development_process_image is not valid.");
            }

         }
      if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }



      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'process','key' => $key],['value' => $val]);
        }

        $home = Setting::where('page','process')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "Our Process Page Content Updated Successfully.")->with('home', $home);
    }



    public function getContact(Request $request)
    {

        $contact = Setting::where('page','contact')->pluck('value','key')->toArray();

        return view('admin.setting.contact',compact('contact'));

    }

    public function storeContact(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','contact');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'contact','key' => $key],['value' => $val]);
        }

        $home = Setting::where('page','contact')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "contact Page Content Updated Successfully.")->with('home', $home);
    }

      public function getCareers(Request $request)
    {

        $careers = Setting::where('page','careers')->pluck('value','key')->toArray();

        return view('admin.setting.careers',compact('careers'));

    }

    public function storeCareers(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','careers');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'careers','key' => $key],['value' => $val]);
        }

        $careers = Setting::where('page','careers')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "careers Page Content Updated Successfully.")->with('careers', $careers);
    }

     public function getBlog()
    {

        $blog = Setting::where('page','blog')->pluck('value','key')->toArray();

        return view('admin.setting.blog',compact('blog'));

    }

    public function storeBlog(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','blog');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'blog','key' => $key],['value' => $val]);
        }

        $blog = Setting::where('page','blog')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "Blog Page Content Updated Successfully.")->with('blog', $blog);
    }

     public function getServices()
    {

        $services = Setting::where('page','services')->pluck('value','key')->toArray();

        return view('admin.setting.services',compact('services'));

    }

    public function storeServices(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','services');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'services','key' => $key],['value' => $val]);
        }

        $services = Setting::where('page','services')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "Services Page Content Updated Successfully.")->with('services', $services);
    }

     public function getPortfolio()
    {

        $portfolio = Setting::where('page','portfolio')->pluck('value','key')->toArray();

        return view('admin.setting.portfolio',compact('portfolio'));

    }

    public function storePortfolio(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','portfolio');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'portfolio','key' => $key],['value' => $val]);
        }

        $portfolio = Setting::where('page','portfolio')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "Portfolio Page Content Updated Successfully.")->with('portfolio', $portfolio);
    }

      public function getTeam()
    {

        $team = Setting::where('page','team')->pluck('value','key')->toArray();

        return view('admin.setting.team',compact('team'));

    }

    public function storeTeam(Request $request)
    {

        $data = $request->all();


         $old_contain = Setting::where('page','team');

          if ($request->hasFile('meta_image')) {
            $logo = $old_contain->where('key', 'meta_image')->first();
            $logo = $logo ? $logo->value : null;
            if ($request->file('meta_image')->isValid()) {
                $filename = Common::uploadFile($request->file('meta_image'),SETTING_IMAGE_PATH,$logo);
                $data['meta_image'] = $filename;
            } else {
                $data['meta_image'] = null;
                throw new \Exception("The meta_image is not valid.");
            }

        }
      foreach ($data as $key => $val) {
            Setting::updateOrCreate(['page' => 'team','key' => $key],['value' => $val]);
        }

        $team = Setting::where('page','team')->pluck('value','key')->toArray();

         return redirect()->back()->with("success_message", "Team Page Content Updated Successfully.")->with('team',  $team);
    }

}
