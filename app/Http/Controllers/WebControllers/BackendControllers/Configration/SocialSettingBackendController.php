<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\WebControllers\BackendControllers\Configration;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Configration\SocialSettingApiController;
use App\Http\Controllers\WebControllers\BackendControllers\Configration\UploadImageBackendController;
use App\Http\Controllers\WebControllers\BackendControllers\Features\UploadImageBackendController as FeaturesUploadImageBackendController;
use App\Models\SocialSetting;
use Image;
use Config;
use Illuminate\Support\Facades\Storage;

class SocialSettingBackendController extends BackendController
{
     /**
       * Prepare For Faq.
       *
       * @param mixed $request
       * @author Anjali Gaikwad
       * Request={
       *    "title":"title",
       *    "body":"body",
       *         }
       * Response ={
       *    Success:[
       *    "StatusCode":200,
       *    "Message":"Success",
       *            ] 
       *    Fail:[
       *    "StatusCode":202,
       *    "Message":"Failed",
       *          ]
       *            }
       *            
       */
//social setting Crud and view start
public function index(){
    $sr = 0; 
    $social_setting_api_controller = new SocialSettingApiController; 
    $data = json_encode(array('datakey'=>"webapplication"));       
    $social_setting = $social_setting_api_controller->getAllSocialSetting($data); 
    $encodedData= json_decode($social_setting->content(),true);               
    $encodedobject=$encodedData['data'] ;
    //dd($encodedobject);
        return view('configration.socialSetting.index',[ 
            'social_settings' => $encodedobject,
            'sr' => $sr,
        ]);        
}

public function create(){
  return view('configration.socialSetting.create');

}
public function store(Request $request)
{
//$image_controller = new FeaturesUploadImageBackendController;
$validated = $request->validate([
    'provider' => 'required|max:255',
    'description' => 'required',
   // 'icon' => 'required',
    'redirect_link'=>'required',
    'client_id'=>'required',
    'client_secret'=>'required'
]);
$social_setting_api_controller = new SocialSettingApiController; 
$data1 = json_encode($request->all()); 
// $folderName="Socials/".request('provider')."/";
// $image=$request->file('icon'); 
// $hight =600;
// $width =null;
// $social_setting_image = $image_controller->storeImage($image,$folderName,$hight,$width);
$data2 = json_encode(array('datakey'=>"webapplication"));  
$data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
$social_setting = $social_setting_api_controller->storeSocialSetting($data); 
$encodedData= json_decode($social_setting->content(),true);     
return redirect()->back()->with('success',$encodedData['message']);
} 

public function show($id){
  $social_setting_api_controller = new SocialSettingApiController; 
  $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));       
  $social_setting = $social_setting_api_controller->getSocialSetting($data); 
  $encodedData= json_decode($social_setting->content(),true);               
  $encodedobject=$encodedData['data'] ;
  // dd($encodedobject);
  return view('configration.socialSetting.show',[
      'social_settings' => $encodedobject,
  ]);
  }

  public function edit($id){
    $social_setting_api_controller = new SocialSettingApiController; 
    $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));       
    $social_setting = $social_setting_api_controller->getSocialSetting($data); 
    $encodedData= json_decode($social_setting->content(),true);               
    $encodedobject=$encodedData['data'] ;
    // dd($encodedobject);
    return view('configration.socialSetting.edit',[
        'social_settings' => $encodedobject,
    ]);
  }

  public function update(Request $request, $id){
    $validated = $request->validate([
      'provider' => 'required|max:255',
      'description' => 'required',
   //   'icon' => 'required',
      'redirect_link'=>'required',
      'client_id'=>'required',
      'client_secret'=>'required'
  ]);
  $social_setting_api_controller = new SocialSettingApiController; 
  $data1 = json_encode($request->all()); 
  $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication"));    
  $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));   
  $social_setting = $social_setting_api_controller->updateSocialSetting($data); 
  $encodedData= json_decode($social_setting->content(),true);               
  return redirect()->back()->with('success',$encodedData['message']);
  }

  public function destroy($id){
    $social_setting_api_controller = new SocialSettingApiController; 
    $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
    $social_setting = $social_setting_api_controller->deleteSocialSetting($data);
    $encodedData= json_decode($social_setting->content(),true);
    return redirect()->back()->with('success',$encodedData['message']);
}
//social setting crud and view ends
    
}
