<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\CertificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\BlogCategory;
use App\Helpers\Common;
use App\Models\Metadata;
use App\Models\Blog;
use Validator;
use Illuminate\Http\Request;
use File;

class BlogController extends Controller {

    public function index(){
        try{


            $blogs =  Blog::active()->orderByDesc('id')->get();
            if($blogs) {
                 $settings = Setting::where('page','blog')->pluck('value','key')->toArray();

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


                return view('frontend.blog', compact('blogs'));
            }else{
                return view('frontend.errors.404');
            }



        } catch (\Exception $ex) {

            return view('errors.404');
        }




    }

    public function blogCategory($slug){

        $popular = BlogCategory::active()->orderBy("id","desc")->get();
        $categoryActiveIds = $popular->pluck("id")->toArray();
        $blogCategory = BlogCategory::active()->where('slug',$slug)->first();
        if($blogCategory) {

            $blogs = Blog::active()->where('blogs_category_id',$blogCategory->id)->paginate(1);

            $recent = Blog::active()->whereIn('blogs_category_id',$categoryActiveIds)->orderBy("id","desc")->take(5)->get();

            $setting = Setting::first();
            $banner = Metadata::active()->where('slug','blog')->first();

             //Metadata
             if($banner->meta_title){
                \Config::set('settings.title', $banner->meta_title);
            }
            if($banner->meta_keywords) {
                \Config::set('settings.metaKeywords', $banner->meta_keywords);
            }
            if($banner->meta_description) {
                \Config::set('settings.metaDescription', Common::shorteningString($banner->meta_description,100));
            }
            if($banner->banner_image) {
                \Config::set('settings.imgurl', BANNER_IMAGE_ROOT.$banner->banner_image);
            }

            return view('frontend.blogCategory', compact('blogs','popular','recent','setting','banner'));
        }else{
            return view('frontend.errors.404');
        }
    }
    public function blogDetail($blogSlug){

        $blog = Blog::active()->where('slug',$blogSlug)->first();

        if($blog) {


            // $banner = Metadata::active()->where('slug','blog')->first();


            //  //Metadata
            //  if($blog->title){
            //     \Config::set('settings.title', $blog->title);
            // }
            // if($banner->meta_keywords) {
            //     \Config::set('settings.metaKeywords', $banner->meta_keywords);
            // }
            // if($blog->description) {
            //     \Config::set('settings.metaDescription', Common::shorteningString(trim(preg_replace('/\s+/', ' ', strip_tags($blog->description))),100));
            // }
            // if($blog->image) {
            //     \Config::set('settings.imgurl', BLOG_IMAGE_ROOT.$blog->image);
            // }

            return view('frontend.blogDetail', compact('blog'));
        }else{
            return view('frontend.errors.404');
        }

    }

}
