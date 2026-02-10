<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BlogCategoriesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\WorkCategoriesController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContactController AS AdminContactController;
use App\Http\Controllers\Admin\CareersController AS AdminCareersController;

use App\Http\Controllers\Frontend\WorkController AS FrontendWorkController;
use App\Http\Controllers\Frontend\BlogController AS FrontendBlogController;
use App\Http\Controllers\Frontend\ExpertiseController AS FrontendExpertiseController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
ini_set('memory_limit', '-1');
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    return 'Successfully clear the cache from system!!'; //Return anything
});

//this
defined('ADMIN_SLUG') or define('ADMIN_SLUG', 'admin');



Route::group(array('prefix' => ADMIN_SLUG), function () {

    Route::get('/', [LoginController::class,'getIndex'])->middleware('guest.admin')->name(ADMIN_SLUG);
    Route::get('logout',[LoginController::class,'doLogout'])->name(ADMIN_SLUG . '.logout');
    Route::post('login', [LoginController::class,'doLogin'])->name(ADMIN_SLUG . '.login');




    Route::group(array('middleware' => 'auth.admin'), function () {

        Route::get('dashboard',[DashboardController::class,'index'])->name(ADMIN_SLUG . '.dashboard');

        Route::get('profile',[DashboardController::class,'getProfile'])->name(ADMIN_SLUG . '.profile');
        Route::post('profile', [DashboardController::class,'storeProfile'])->name(ADMIN_SLUG . '.profile.store');

         Route::get('password',[DashboardController::class,'getPassword'])->name(ADMIN_SLUG . '.password');
        Route::post('password', [DashboardController::class,'storePassword'])->name(ADMIN_SLUG . '.password.change');

        Route::post('slider/changeStatus', [SliderController::class,'changeStatus'])->name("slider.changeStatus");
        Route::resource('slider', SliderController::class);

        Route::post('team/changeStatus', [TeamController::class,'changeStatus'])->name("team.changeStatus");
        Route::resource('team', TeamController::class);


        Route::post('experties/changeStatus', [ExpertiseController::class,'changeStatus'])->name("experties.changeStatus");
        Route::resource('experties', ExpertiseController::class);

        Route::post('testimonials/changeStatus', [TestimonialsController::class,'changeStatus'])->name("testimonials.changeStatus");
        Route::resource('testimonials', TestimonialsController::class);

        Route::post('clients/changeStatus', [ClientController::class,'changeStatus'])->name("clients.changeStatus");
        Route::resource('clients', ClientController::class);

        Route::post('blogcategories/changeStatus', [BlogCategoriesController::class,'changeStatus'])->name("blogcategories.changeStatus");
        Route::resource('blogcategories', BlogCategoriesController::class);

        Route::post('blog/changeStatus', [BlogController::class,'changeStatus'])->name("blog.changeStatus");
        Route::resource('blog', BlogController::class);


        Route::post('workcategories/changeStatus', [WorkCategoriesController::class,'changeStatus'])->name("workcategories.changeStatus");
        Route::resource('workcategories', WorkCategoriesController::class);

        Route::post('work/image-upload', [WorkController::class,'storeWorkImage'])->name("work.storeImage");
        Route::post('work/deleteImage',[WorkController::class,'deleteImage']);
        Route::post('work/sortImage',[WorkController::class,'sortImage']);
        Route::post('work/changeStatus', [WorkController::class,'changeStatus'])->name("work.changeStatus");
        Route::resource('work', WorkController::class);

        Route::resource('contact', AdminContactController::class);

        Route::resource('careers', AdminCareersController::class);

        Route::get('setting/home', [SettingController::class,'getHome'])->name("setting.home");
        Route::post('setting/home', [SettingController::class,'storeHome'])->name("setting.home.store");

        Route::get('setting/why', [SettingController::class,'getWhy'])->name("setting.why");
        Route::post('setting/why', [SettingController::class,'storeWhy'])->name("setting.why.store");

        Route::get('setting/mission', [SettingController::class,'getMission'])->name("setting.mission");
        Route::post('setting/mission', [SettingController::class,'storeMission'])->name("setting.mission.store");

        Route::get('setting/process', [SettingController::class,'getProcess'])->name("setting.process");
        Route::post('setting/process', [SettingController::class,'storeProcess'])->name("setting.process.store");

        Route::get('setting/contact', [SettingController::class,'getContact'])->name("setting.contact");
        Route::post('setting/contact', [SettingController::class,'storeContact'])->name("setting.contact.store");

        Route::get('setting/careers', [SettingController::class,'getCareers'])->name("setting.careers");
        Route::post('setting/careers', [SettingController::class,'storeCareers'])->name("setting.careers.store");

        Route::get('setting/blog', [SettingController::class,'getBlog'])->name("setting.blog");
        Route::post('setting/blog', [SettingController::class,'storeBlog'])->name("setting.blog.store");

        Route::get('setting/services', [SettingController::class,'getServices'])->name("setting.services");
        Route::post('setting/services', [SettingController::class,'storeServices'])->name("setting.services.store");

        Route::get('setting/portfolio', [SettingController::class,'getPortfolio'])->name("setting.portfolio");
        Route::post('setting/portfolio', [SettingController::class,'storePortfolio'])->name("setting.portfolio.store");

        Route::get('setting/team', [SettingController::class,'getTeam'])->name("setting.team");
        Route::post('setting/team', [SettingController::class,'storeTeam'])->name("setting.team.store");





    });
});


//this

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/why-us',[HomeController::class,'why'])->name('why-us');
Route::get('/mission-vision',[HomeController::class,'mission'])->name('mission-vision');
Route::get('/our-process',[HomeController::class,'process'])->name('our-process');
Route::get('/team',[HomeController::class,'team'])->name('team');


Route::get( '/portfolio',[FrontendWorkController::class,'index'])->name('our-portfolio');
Route::get( '/portfolio/{slug}',[FrontendWorkController::class,'portfolioDetail'])->name('portfolio-detail');

Route::get('/blog',[FrontendBlogController::class,'index'])->name('blog');
Route::get( '/blog/{slug}',[FrontendBlogController::class,'blogDetail'])->name('blog-detail');

Route::get('/services',[FrontendExpertiseController::class,'index'])->name('services');
Route::get( '/services/{slug}',[FrontendExpertiseController::class,'expertiseDetail'])->name('services-detail');

Route::get('/careers',[CareerController::class,'index'])->name('careers');
Route::post('/careers',[CareerController::class,'careersSave'])->name('careersSave');

Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
Route::post('/contact-us',[ContactController::class,'contactSave'])->name('contactSave');






defined('USER_IMAGE_PATH') or define('USER_IMAGE_PATH', storage_path('app/public/user/'));
defined('USER_IMAGE_ROOT') or define('USER_IMAGE_ROOT', asset('storage/user') . '/');

defined('SLIDER_IMAGE_PATH') or define('SLIDER_IMAGE_PATH', storage_path('app/public/slider/'));
defined('SLIDER_IMAGE_ROOT') or define('SLIDER_IMAGE_ROOT', asset('storage/slider') . '/');
defined('SLIDER_IMAGE') or define('SLIDER_IMAGE', asset('storage/slider/slider.png'));

defined('SETTING_IMAGE_PATH') or define('SETTING_IMAGE_PATH', storage_path('app/public/setting/'));
defined('SETTING_IMAGE_ROOT') or define('SETTING_IMAGE_ROOT', asset('storage/setting') . '/');
defined('SETTING_IMAGE') or define('SETTING_IMAGE', asset('storage/setting/setting.png'));

defined('IMAGE_NOT_FOUND') or define('IMAGE_NOT_FOUND', asset('storage/default.png'));
defined('PROFILE_IMAGE') or define('PROFILE_IMAGE', asset('storage/profile.png'));

defined('EXPERTIES_IMAGE_PATH') or define('EXPERTIES_IMAGE_PATH', storage_path('app/public/experties/'));
defined('EXPERTIES_IMAGE_ROOT') or define('EXPERTIES_IMAGE_ROOT', asset('storage/experties') . '/');
defined('EXPERTIES_IMAGE') or define('EXPERTIES_IMAGE', asset('storage/experties/experties.png'));


defined('CLIENT_IMAGE_PATH') or define('CLIENT_IMAGE_PATH', storage_path('app/public/client/'));
defined('CLIENT_IMAGE_ROOT') or define('CLIENT_IMAGE_ROOT', asset('storage/client') . '/');
defined('CLIENT_IMAGE') or define('CLIENT_IMAGE', asset('storage/client/client.png'));


defined('BLOG_IMAGE_PATH') or define('BLOG_IMAGE_PATH', storage_path('app/public/blog/'));
defined('BLOG_IMAGE_ROOT') or define('BLOG_IMAGE_ROOT', asset('storage/blog') . '/');
defined('BLOG_IMAGE') or define('BLOG_IMAGE', asset('storage/blog/blog.png'));

defined('WORK_IMAGE_PATH') or define('WORK_IMAGE_PATH', storage_path('app/public/work/'));
defined('WORK_IMAGE_ROOT') or define('WORK_IMAGE_ROOT', asset('storage/work') . '/');
defined('WORK_IMAGE') or define('WORK_IMAGE', asset('storage/work/work.png'));

defined('TEAM_IMAGE_PATH') or define('TEAM_IMAGE_PATH', storage_path('app/public/team/'));
defined('TEAM_IMAGE_ROOT') or define('TEAM_IMAGE_ROOT', asset('storage/team') . '/');
defined('TEAM_IMAGE') or define('TEAM_IMAGE', asset('storage/team/team.png'));



defined('CAREER_PDF_PATH') or define('CAREER_PDF_PATH', storage_path('app/public/career/'));
defined('CAREER_PDF_ROOT') or define('CAREER_PDF_ROOT', asset('storage/career') . '/');



defined('LOGO_IMAGE') or define('LOGO_IMAGE', asset('storage/logo.png'));
