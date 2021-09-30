<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\ServiceApiController;
use App\Http\Controllers\WebControllers\BackendControllers\Features\UploadImageBackendController;
use Image;
use Config;
use Illuminate\Support\Facades\Storage;


class ServiceBackendController extends BackendController
{
     /**
       * Prepare For Faq.
       *
       * @param mixed $request
       * @author Manav Pandey
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

      public function index(){
        $sr = 0; 
        $service_api_controller = new ServiceApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $service = $service_api_controller->getAllService($data); 
        $encodedData= json_decode($service->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
            return view('featrures.service.serviceIndex',[ 
                'service_details' => $encodedobject,
                'sr' => $sr,
            ]);        
    }

    public function create(){
      return view('featrures.service.serviceCreate');

    }
public function store(Request $request)
{
  $image_controller = new UploadImageBackendController;
    $validated = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'color' => 'required',
        'image'=> 'required',
        'position'=>'required'
    ]);
    $service_api_controller = new ServiceApiController; 
    $data1 = json_encode($request->all()); 
    $folderName="Services/".request('title')."/";
    $image=$request->file('image'); 
    $hight =600;
    $width =null;
    $service_image = $image_controller->storeImage($image,$folderName,$hight,$width);
    $data2 = json_encode(array('datakey'=>"webapplication",'image'=>$service_image));  
    $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
    $service = $service_api_controller->storeService($data); 
    $encodedData= json_decode($service->content(),true);     
    return redirect()->back()->with('success',$encodedData['message']);
    } 

    public function show($slug){
      $service_api_controller = new ServiceApiController; 
      $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug));       
      $servicee = $service_api_controller->getServiceBySlug($data); 
      $encodedData= json_decode($servicee->content(),true);               
      $encodedobject=$encodedData['data'] ;
      // dd($encodedobject);
      return view('featrures.service.serviceShow',[
          'servicee' => $encodedobject,
      ]);
      }

      public function edit($slug){
        $service_api_controller = new ServiceApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug));       
        $servicee = $service_api_controller->getServiceBySlug($data); 
        $encodedData= json_decode($servicee->content(),true);               
        $encodedobject=$encodedData['data'] ;
        // dd($encodedobject);
        return view('featrures.service.serviceEdit',[
            'servicee' => $encodedobject,
        ]);
      }

      public function update(Request $request, $id){
        $validated = $request->validate([
          'title' => 'required|max:255',
          'description' => 'required',
          'color' => 'required',
          'image'=> 'required',
          'position'=>'required'
      ]);
      $service_api_controller = new ServiceApiController; 
      $data1 = json_encode($request->all()); 
      $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication"));    
      $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));   
      $servicee = $service_api_controller->updateService($data); 
      $encodedData= json_decode($servicee->content(),true);               
      return redirect()->back()->with('success',$encodedData['message']);
      }

      public function destroy($id){
        $service_api_controller = new ServiceApiController; 
        $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
        $servicee = $service_api_controller->deleteService($data);
        $encodedData= json_decode($servicee->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }

        
}