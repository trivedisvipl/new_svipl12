<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\CertificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;
use App\Models\Setting;
use Validator;
use Illuminate\Http\Request;
use File;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Exp;

class WorkController extends Controller {

    public function index()
    {
        try{
            $workCategory = PortfolioCategory::active()->orderByDesc('id')->get();

            $work = Portfolio::active()->orderByDesc('id')->get();

             $settings = Setting::where('page','portfolio')->pluck('value','key')->toArray();

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


            return view('frontend.ourWork',compact('workCategory','work'));
        } catch (\Exception $ex) {

            return view('errors.404');
        }
    }


public function portfolioDetail($slug){
    try{
       // $workCategory = PortfolioCategory::active()->orderByDesc('id')->get();

        $work = Portfolio::active()->where('slug',$slug)->firstOrFail();


        return view('frontend.workDetail',compact('work'));
    } catch (\Exception $ex) {

        return view('errors.404');
    }
}









}
