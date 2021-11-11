<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('google-analytics-summary',array('as'=>'google-analytics-summary', 'uses'=>'HomeController@getAnalyticsSummary'));


Auth::routes([
  'register' => true,
]);

// Route For clear cache start
Route::get('/cache-clear', function() {

  $exitCode1 = Artisan::call('config:cache');  
  $exitCode2 = Artisan::call('view:clear');
  $exitCode3= Artisan::call('cache:clear');
  return 'Application cache cleared';
}); 

Route::get('/route-clear', function() {
  $exitCode = Artisan::call('route:cache');
  $exitCode2= Artisan::call('cache:clear');
  return 'Application route cache cleared';

}); 
// Route For clear cache end

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WebControllers\FrontendControllers\LandingFrontendController@index');


// Route For Staff Start
Route::get('/staff', 'WebControllers\BackendControllers\StaffBackendController@index')->name('superadmin.staff')->middleware('auth');
Route::get('/staff/create', 'WebControllers\BackendControllers\StaffBackendController@create')->name('superadmin.staff.create')->middleware('auth');
Route::post('/staff', 'WebControllers\BackendControllers\StaffBackendController@store')->name('superadmin.staff.store')->middleware('auth');
Route::get('/staff/view/{id}', 'WebControllers\BackendControllers\StaffBackendController@show')->name('superadmin.staff.show')->middleware('auth');
Route::get('/staff/edit/{id}', 'WebControllers\BackendControllers\StaffBackendController@edit')->name('superadmin.staff.edit')->middleware('auth');
Route::get('/staff/update/{id}', 'WebControllers\BackendControllers\StaffBackendController@update')->name('superadmin.staff.update')->middleware('auth');
Route::get('/staff/{id}', 'WebControllers\BackendControllers\StaffBackendController@destroy')->name('superadmin.staff.destroy')->middleware('auth');
// Route For staff End 

// Route For Language Code Start

Route::get('/languagecode', 'WebControllers\BackendControllers\Configration\LanguageCodeBackendController@index')->name('superadmin.languagecode')->middleware('auth');
Route::post('/languagecode', 'WebControllers\BackendControllers\Configration\LanguageCodeBackendController@store')->name('superadmin.languagecode.store')->middleware('auth');
Route::post('/languagecode/update/{id}', 'WebControllers\BackendControllers\Configration\LanguageCodeBackendController@update')->name('superadmin.languagecode.update')->middleware('auth');
Route::get('/languagecode/{id}', 'WebControllers\BackendControllers\Configration\LanguageCodeBackendController@destroy')->name('superadmin.languagecode.destroy')->middleware('auth');
// Route For Language Code End  

// Route For Role Type Start
Route::get('/role', 'WebControllers\BackendControllers\Configration\RoleBackendController@index')->name('superadmin.typeofrole')->middleware('auth');
Route::post('/role', 'WebControllers\BackendControllers\Configration\RoleBackendController@store')->name('superadmin.typeofrole.store')->middleware('auth');
Route::post('/role/update/{id}', 'WebControllers\BackendControllers\Configration\RoleBackendController@update')->name('superadmin.typeofrole.update')->middleware('auth');
Route::get('/role/{id}', 'WebControllers\BackendControllers\Configration\RoleBackendController@destroy')->name('superadmin.typeofrole.destroy')->middleware('auth');
// Route For Role Type End 

// Route For User Start
Route::get('/user-configration', 'WebControllers\BackendControllers\Configration\UserConfigrationBackendController@index')->name('superadmin.user')->middleware('auth');
Route::post('/user-configration', 'WebControllers\BackendControllers\Configration\UserConfigrationBackendController@store')->name('superadmin.user.store')->middleware('auth');
Route::post('/user-configration/update/{id}', 'WebControllers\BackendControllers\Configration\UserConfigrationBackendController@update')->name('superadmin.user.update')->middleware('auth');
Route::get('/user-configration/{id}', 'WebControllers\BackendControllers\Configration\UserConfigrationBackendController@destroy')->name('superadmin.user.destroy')->middleware('auth');
// Route For user End 

// Route For User Start
Route::get('/user', 'WebControllers\BackendControllers\UserBackendController@index')->name('user')->middleware('auth');
Route::get('/user/create', 'WebControllers\BackendControllers\UserBackendController@create')->name('user.create')->middleware('auth');
Route::post('/user', 'WebControllers\BackendControllers\UserBackendController@store')->name('user.store')->middleware('auth');
Route::get('/user/view/{id}', 'WebControllers\BackendControllers\UserBackendController@show')->name('user.show')->middleware('auth');
Route::get('/user/edit/{id}', 'WebControllers\BackendControllers\UserBackendController@edit')->name('user.edit')->middleware('auth');
Route::get('/user/update/{id}', 'WebControllers\BackendControllers\UserBackendController@update')->name('user.update')->middleware('auth');
Route::get('/user/{id}', 'WebControllers\BackendControllers\UserBackendController@destroy')->name('user.destroy')->middleware('auth');
// Route For user End 

// Route For faq Start
Route::get('/getfaq', 'WebControllers\BackendControllers\Features\FaqBackendController@index')->name('index.faq')->middleware('auth');
Route::post('/addfaq', 'WebControllers\BackendControllers\Features\FaqBackendController@store')->name('store.faq')->middleware('auth');
Route::post('/faq/update/{id}', 'WebControllers\BackendControllers\Features\FaqBackendController@update')->name('update.faq')->middleware('auth');
Route::get('/faq/{id}', 'WebControllers\BackendControllers\Features\FaqBackendController@destroy')->name('destroy.faq')->middleware('auth');
// Route For faq End 

// Route For Payment
Route::get('/payments', 'WebControllers\BackendControllers\Features\PaymentBackendController@index')->name('payment.index')->middleware('auth');
Route::get('/payment/view/{id}', 'WebControllers\BackendControllers\Features\PaymentBackendController@show')->name('payment.show')->middleware('auth');
Route::get('/payment/{id}', 'WebControllers\BackendControllers\Features\PaymentBackendController@destroy')->name('payment.destroy')->middleware('auth');
//Route For Payment End

// Route For Sms Templet Start
 Route::get('/smstemplet', 'WebControllers\BackendControllers\Features\SmsTemplateBackendController@index')->name('smstemplet.view')->middleware('auth');
 Route::post('/smstemplet', 'WebControllers\BackendControllers\Features\SmsTemplateBackendController@store')->name('smstemplet.store')->middleware('auth');
 Route::post('/smstemplet/update/{id}', 'WebControllers\BackendControllers\Features\SmsTemplateBackendController@update')->name('smstemplet.update')->middleware('auth');
 Route::get('/smstemplet/{id}', 'WebControllers\BackendControllers\Features\SmsTemplateBackendController@destroy')->name('smstemplet.destroy')->middleware('auth');
//Route For Sms Templet End  

// Route For Email Templet Start
Route::get('/emailtemplet', 'WebControllers\BackendControllers\Features\EmailTemplateBackendController@index')->name('emailtemplet.view')->middleware('auth');
Route::post('/emailtemplet', 'WebControllers\BackendControllers\Features\EmailTemplateBackendController@store')->name('emailtemplet.store')->middleware('auth');
Route::post('/emailtemplet/update/{id}', 'WebControllers\BackendControllers\Features\EmailTemplateBackendController@update')->name('emailtemplet.update')->middleware('auth');
Route::get('/emailtemplet/{id}', 'WebControllers\BackendControllers\Features\EmailTemplateBackendController@destroy')->name('emailtemplet.destroy')->middleware('auth');
//Route For Email Templet End 

//Route For Slider
Route::get('/sliders', 'WebControllers\BackendControllers\Features\SliderBackendController@index')->name('slider.index')->middleware('auth');
Route::get('/slider/create', 'WebControllers\BackendControllers\Features\SliderBackendController@create')->name('slider.create')->middleware('auth');
Route::post('/slider', 'WebControllers\BackendControllers\Features\SliderBackendController@store')->name('slider.store')->middleware('auth');
Route::get('/slider/edit/{slug}', 'WebControllers\BackendControllers\Features\SliderBackendController@edit')->name('slider.edit')->middleware('auth');

Route::get('/slider/view/{slug}', 'WebControllers\BackendControllers\Features\SliderBackendController@show')->name('slider.show')->middleware('auth');
//End for slider

// Route For Social setting Start
Route::get('/social', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@index')->name('social.index')->middleware('auth');
Route::get('/social/create', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@create')->name('social.create')->middleware('auth');
Route::post('/social', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@store')->middleware('auth');
Route::get('/social/view/{id}', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@show')->name('social.show')->middleware('auth');
Route::get('/social/edit/{id}', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@edit')->name('social.edit')->middleware('auth');
Route::post('/social/update/{id}', 'WebControllers\BackendControllers\Configration\SocialSettingBackendController@destroy')->name('social.destroy')->middleware('auth');
// Route For  Social setting End 


// Route For Services
Route::get('/services', 'WebControllers\BackendControllers\Features\ServiceBackendController@index')->name('service.index')->middleware('auth');
Route::get('/service/create', 'WebControllers\BackendControllers\Features\ServiceBackendController@create')->name('service.create')->middleware('auth');
Route::post('/services', 'WebControllers\BackendControllers\Features\ServiceBackendController@store')->name('service.store')->middleware('auth');
Route::get('/service/view/{slug}', 'WebControllers\BackendControllers\Features\ServiceBackendController@show')->name('service.show')->middleware('auth');
Route::get('/service/edit/{slug}', 'WebControllers\BackendControllers\Features\ServiceBackendController@edit')->name('service.edit')->middleware('auth');
Route::post('/service/update/{id}', 'WebControllers\BackendControllers\Features\ServiceBackendController@update')->name('service.update')->middleware('auth');
Route::get('/service/{id}', 'WebControllers\BackendControllers\Features\ServiceBackendController@destroy')->name('service.destroy')->middleware('auth');
//Route For Service End

//Route for Service Addon
Route::get('/addon', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addonindex')->name('addon.index')->middleware('auth');
Route::get('/addon/create', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addoncreate')->name('addon.create')->middleware('auth');
Route::post('/addon', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addonstore')->name('addon.store')->middleware('auth');
Route::get('/addon/view/{slug}', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addonshow')->name('addon.show')->middleware('auth');
Route::get('/addon/edit/{slug}', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addonedit')->name('addon.edit')->middleware('auth');
Route::post('/addon/update/{id}', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addonupdate')->name('addon.update')->middleware('auth');
Route::get('/addon/{id}', 'WebControllers\BackendControllers\Features\ServiceAddonBackendController@addondestroy')->name('addon.destroy')->middleware('auth');
//Route for Service Addon Ends

//Route for Pricing (Methods)
Route::get('/method/{slug}', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@methodindex')->name('method.index')->middleware('auth');
Route::get('/method/create/{slug}', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@methodcreate')->name('method.create')->middleware('auth');
Route::post('/method', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@methodstore')->name('method.store')->middleware('auth');
//Route for Pricing (Method Units)
Route::get('/unit', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@unitindex')->name('unit.index')->middleware('auth');
Route::get('/unit/create', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@unitcreate')->name('unit.create')->middleware('auth');
Route::post('/unit', 'WebControllers\BackendControllers\Features\PricingMethodBackendController@unitstore')->name('unit.store')->middleware('auth');


// Sandbox Route







// Route::get('/image', 'Sandbox\SandBoxImageUploadController@index');

// Route::prefix('sandbox')->group(function () {
    //Image Route 
    Route::get('/image', 'Sandbox\SandBoxImageUploadController@index');
    Route::post('/image/upload', 'Sandbox\SandBoxImageUploadController@upload');
    Route::post('/sms', 'Sandbox\SmsController@sendSms');

    Route::get('razorpay', 'Sandbox\RazorpayController@razorpay')->name('razorpay');
    Route::post('razorpaypayment', 'Sandbox\RazorpayController@payment')->name('payment');

    Route::get('/config',function(){
      // return "test";
      //return config('constants.welcome');
      //dd(config('constants'));
      return Config::get('constants.images_path');
     }); 


     Route::prefix('ajax')->group(function () {
        Route::get('/', 'Sandbox\AjaxController@index'); 
        Route::get('/getRequest', 'Sandbox\AjaxController@getRequest');
        Route::post('/getPostDataFromServe','Sandbox\AjaxController@getPostDataFromServe');
    
     });
    
     Route::get('/demo2', 'Sandbox\TestingController@demo')->name('demo3'); 
     Route::get('/demo3/{slug}', 'Sandbox\TestingController@itratingData');


     Route::get('/sendEmail', 'Sandbox\EmailController@index');
     
      Route::post('/sendemail/send', 'Sandbox\EmailController@send');

// });


//route for schedule break start
Route::get('/get_schedule-break', 'WebControllers\BackendControllers\Schedule\ScheduleBreakBackendController@index')->name('schedulebreak.index')->middleware('auth');
Route::post('/add_schedule-break', 'WebControllers\BackendControllers\Schedule\ScheduleBreakBackendController@store')->name('store.schedulebreak')->middleware('auth');
Route::post('/schedule-break/update/{id}', 'WebControllers\BackendControllers\Schedule\ScheduleBreakBackendController@update')->name('update.schedulebreak')->middleware('auth');
Route::get('/schedule-break/{id}', 'WebControllers\BackendControllers\Schedule\ScheduleBreakBackendController@destroy')->name('destroy.schedulebreak')->middleware('auth');
// Route For schedule break End 

//route for schedule offtime start
Route::get('/get_schedule-offtime', 'WebControllers\BackendControllers\Schedule\ScheduleOfftimeBackendController@index')->name('scheduleofftime.index')->middleware('auth');
Route::post('/add_schedule-offtime', 'WebControllers\BackendControllers\Schedule\ScheduleOfftimeBackendController@store')->name('store.scheduleofftime')->middleware('auth');
Route::post('/schedule-offtime/update/{id}', 'WebControllers\BackendControllers\Schedule\ScheduleOfftimeBackendController@update')->name('update.scheduleofftime')->middleware('auth');
Route::get('/schedule-offtime/{id}', 'WebControllers\BackendControllers\Schedule\ScheduleOfftimeBackendController@destroy')->name('destroy.scheduleofftime')->middleware('auth');
// Route For schedule offtime End 

Route::get('/get_schedulebreakcalender', 'WebControllers\BackendControllers\Schedule\ScheduleCalenderBackendController@index')->name('schedulebreakcalender.index')->middleware('auth');


//route for landing page start
Route::get('/user-home', 'WebControllers\FrontendControllers\LandingFrontendController@index');
Route::get('/about-us', 'WebControllers\FrontendControllers\AboutUsFrontendController@index')->name('aboutus');
Route::get('/privacy-policy', 'WebControllers\FrontendControllers\PrivacyPolicyFrontendController@index')->name('privacy-policy');
//route for landing page end

//route for contact us start
Route::post('/contact-us', 'WebControllers\FrontendControllers\LandingFrontendController@contactUs')->name('contact-us');
//route for contact us end