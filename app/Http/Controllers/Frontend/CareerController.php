<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Helpers\Common;
use App\Models\Career;
use App\Models\Setting;
use Validator;
use Illuminate\Http\Request;
use File;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frontend\CareerMail;
use Illuminate\Validation\Rule;
use Str;


class CareerController extends Controller
{

    public function careersSave(Request $request){


        //$response = ['success' => false, 'message' => ''];

        try{
              $request->validate([
                  'name' => ['required'],
                'email' => ['required','email'],
                'phone' => ['required','numeric'],
                'position' => ['required'],
                'skills' => ['required'],
                'notice_period' => ['required'],
                'experience' => ['required'],
                'resume' => ['required', 'file', 'mimes:pdf'],
                //'g-recaptcha-response' => ['required', new ReCaptcha('careersSave')]
               ],[
                'name.required' => "The Name field is required",
                'email.required' => "The Email field is required",
                'email.email' => "The Email field must be a valid email address",
                'phone.required' => "The Phone No field is required",
                'phone.numeric' => "The Phone No field must be a valid number",
                'address.required' => "The Address field is required",
                'experience.required' => "The experience field is required",
                'position.required' => "The position field is required",
                'message.required' => "The message field is required",
                'resume.required' => "The Resume is required",
                'resume.mimes' => "The Resume file type must be pdf",
                ]);

            $data = $request->all();


            //dd($data);

            if ($request->hasFile('resume')) {

                if ($request->file('resume')->isValid()) {
                    $filename = Common::uploadFile($request->file('resume'),CAREER_PDF_PATH);
                    $data['resume'] = $filename;
                } else {
                    $data['resume'] = null;
                    throw new \Exception("The Resume is not valid.");
                }

            }
            $career =  Career::create($data);
            if($career){
                //send Career enquiry mail to admin
                //Mail::to(config('settings.toEmail'))->send(new CareerMail($career));

            }
            return redirect()->back()->with("success_message", "Thank you for applying.");

            // $response['success'] = true;
            // $response['message'] = 'Thank you for applying';
    } catch (\Exception $ex) {
       return redirect()->back()->with("error_message", $ex->getMessage())->withInput();
    }


    }

    public function index()
    {
        $settings = Setting::where('page','careers')->pluck('value','key')->toArray();

            if(isset($settings)){
                //Metadata
                if($settings['meta_title']){
                    \Config::set('settings.title', $settings['meta_title']);
                }
                if($settings['meta_keywords']) {
                    \Config::set('settings.metaKeywords', $settings['meta_keywords']);
                }
                if($settings['meta_description']) {
                    \Config::set('settings.metaDescription', $settings['meta_description']);
                }
                if($settings['meta_image']) {
                    \Config::set('settings.imgurl', SETTING_IMAGE_ROOT.$settings['meta_image']);
                }
            }
        return view('frontend.careers');
    }



}
