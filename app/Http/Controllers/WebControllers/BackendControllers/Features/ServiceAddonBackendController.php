<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\ServiceAddonApiController;
use App\Http\Controllers\WebControllers\BackendControllers\Features\UploadImageBackendController;
use Image;
use Config;
use Illuminate\Support\Facades\Storage;

class ServiceAddonBackendController extends BackendController
{
    //addon crud and view starts
        public function addonindex(){
        $sr = 0; 
        $service_api_controller = new ServiceAddonApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $addon = $service_api_controller->getAllAddon($data); 
        $encodedData= json_decode($addon->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
            return view('featrures.service.addon.addonIndex',[ 
                'addon_details' => $encodedobject,
                'sr' => $sr,
            ]);        
        }
  
        public function addoncreate(){
        return view('featrures.service.addon.addonCreate');
        }
  
        public function addonstore(Request $request)
        {
        $image_controller = new UploadImageBackendController;
        $service_api_controller = new ServiceAddonApiController; 
        $data1 = json_encode($request->all()); 
        $folderName="Services/".request('servicename')."/";
        $image=$request->file('image','predefineimage'); 
        $hight =600;
        $width =null;
        $addon_image = $image_controller->storeImage($image,$folderName,$hight,$width);
        $data2 = json_encode(array('datakey'=>"webapplication",'image'=>$addon_image,'predefineimage'=>$addon_image));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $addon = $service_api_controller->storeAddon($data); 
        $encodedData= json_decode($addon->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        } 
  
        public function addonshow($slug){
        $service_api_controller = new ServiceAddonApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug));       
        $addon = $service_api_controller->getAddonBySlug($data); 
        $encodedData= json_decode($addon->content(),true);               
        $encodedobject=$encodedData['data'] ;
        // dd($encodedobject);
        return view('featrures.service.addon.addonShow',[
            'addon' => $encodedobject,
        ]);
        }
  
        public function addonedit($slug){
          $service_api_controller = new ServiceAddonApiController; 
          $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug));       
          $addon = $service_api_controller->getAddonBySlug($data); 
          $encodedData= json_decode($addon->content(),true);               
          $encodedobject=$encodedData['data'] ;
          // dd($encodedobject);
          return view('featrures.service.addon.addonEdit',[
              'addon' => $encodedobject,
          ]);
        }
  
        public function addonupdate(Request $request, $id){
        $service_api_controller = new ServiceAddonApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication"));    
        $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));   
        $addon = $service_api_controller->updateAddon($data); 
        $encodedData= json_decode($addon->content(),true);               
        return redirect()->back()->with('success',$encodedData['message']);
        }
  
        public function addondestroy($id){
          $service_api_controller = new ServiceAddonApiController; 
          $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
          $addon = $service_api_controller->deleteAddon($data);
          $encodedData= json_decode($addon->content(),true);
          return redirect()->back()->with('success',$encodedData['message']);
        }
  
      //addon crud and view ends
}
