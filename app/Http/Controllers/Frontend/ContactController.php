<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Helpers\Common;
use App\Models\Metadata;
use App\Models\Setting;
use App\Models\Contact;
use Validator;
use Illuminate\Http\Request;
use File;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frontend\ContactMail;
class ContactController extends Controller
{

    public function contactSave(Request $request){

        $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'phone' => ['numeric'],
           // 'g-recaptcha-response' => ['required', new ReCaptcha('submitContact')]
           ],[
            'name.required' => "The Your Name field is required",
            'email.required' => "The Email field is required",
            'email.email' => "The Email field must be a valid email address",
        ]);

        $data = $request->all();

        $conatct = Contact::create($data);
        if($conatct){

            $data = $conatct->toArray();

            Mail::to(config('settings.toEmail'))->send(new ContactMail($conatct));

            return redirect()->route("contact")->with("success_message", "Thank you for contacting us, we will be in touch with you shortly");
        }else{
            return redirect()->back()->with("error_message","something went wrong please try again!");
        }



    }

    public function index()
    {
          $settings = Setting::where('page','home')->pluck('value','key')->toArray();


       $contactMeta = Setting::where('page','contact')->pluck('value','key')->toArray();

            if(isset($contactMeta)){
                //Metadata
                if($contactMeta['meta_title']){
                    \Config::set('settings.title', $contactMeta['meta_title']);
                }
                if($contactMeta['meta_keywords']) {
                    \Config::set('settings.metaKeywords', $contactMeta['meta_keywords']);
                }
                if($contactMeta['meta_description']) {
                    \Config::set('settings.metaDescription', $contactMeta['meta_description']);
                }
                if($contactMeta['meta_image']) {
                    \Config::set('settings.imgurl', SETTING_IMAGE_ROOT.$contactMeta['meta_image']);
                }
            }
        return view('frontend.contact',compact('settings'));
    }



}
