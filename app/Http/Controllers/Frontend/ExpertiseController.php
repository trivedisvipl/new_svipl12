<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\CertificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\Expertise;
use App\Models\Setting;

use Validator;
use Illuminate\Http\Request;
use File;

class ExpertiseController extends Controller {

    public function index(){
        try{


            $expertise =  Expertise::active()->orderByDesc('id')->get();
            if($expertise) {


            //$banner = Metadata::active()->where('slug','blog')->first();

            // //Metadata
            // if($banner->meta_title){
            //     \Config::set('settings.title', $banner->meta_title);
            // }
            // if($banner->meta_keywords) {
            //     \Config::set('settings.metaKeywords', $banner->meta_keywords);
            // }
            // if($banner->meta_description) {
            //     \Config::set('settings.metaDescription', Common::shorteningString($banner->meta_description,100));
            // }
            // if($banner->banner_image) {
            //     \Config::set('settings.imgurl', BANNER_IMAGE_ROOT.$banner->banner_image);
            // }


                return view('frontend.expertise', compact('expertise'));
            }else{
                return view('frontend.errors.404');
            }



        } catch (\Exception $ex) {

            return view('errors.404');
        }

        // $popular = BlogCategory::active()->orderBy("id","desc")->get();
        // $categoryActiveIds = $popular->pluck("id")->toArray();

        $blogs = Blog::active()->whereIn('blogs_category_id',$categoryActiveIds)->orderBy("id","desc")->paginate(5);


    }

    public function expertiseDetail($expertiseSlug){

        $expertise = Expertise::active()->where('slug',$expertiseSlug)->first();

        if($expertise) {

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

            return view('frontend.expertiseDetail', compact('expertise'));
        }else{
            return view('frontend.errors.404');
        }

    }

}
