<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\CertificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Helpers\Common;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\User;
use App\Models\Setting;
use App\Models\Metadata;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Expertise;
use App\Models\HomeProduct;
use App\Models\Testimonials;
use Validator;
use Illuminate\Http\Request;
use File;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Exp;

class HomeController extends Controller
{

    public function index()
    {

             $slider = Slider::active()->orderByDesc('id')->get();
             $experties = Expertise::active()->inRandomOrder()->limit(3)->get();
             $clients = Client::active()->orderByDesc('id')->get();
             $testimonials = Testimonials::active()->orderByDesc('id')->get();
             $blog = Blog::active()->orderByDesc('id')->get();
             $settings = Setting::where('page','home')->pluck('value','key')->toArray();

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

        return view('frontend.index',compact('slider','experties','clients','testimonials','blog','settings'));
    }

    public function why()
    {
         $settings = Setting::where('page','why-choose')->pluck('value','key')->toArray();

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

        return view('frontend.why',compact('settings'));
    }

     public function mission()
    {
         $settings = Setting::where('page','mission')->pluck('value','key')->toArray();

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


        return view('frontend.mission',compact('settings'));
    }

      public function process()
    {
         $settings = Setting::where('page','process')->pluck('value','key')->toArray();

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

        return view('frontend.process',compact('settings'));
    }



}
