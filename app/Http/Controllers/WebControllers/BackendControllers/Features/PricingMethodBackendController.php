<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\PricingMethodApiController;


class PricingMethodBackendController extends BackendController
{
    //pricing(methods) view starts
    public function methodindex($slug){
        $sr = 0; 
        $service_api_controller = new PricingMethodApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $method = $service_api_controller->getServiceMethods($data); 
        $encodedData= json_decode($method->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
            return view('featrures.service.pricing.pricingIndex',[ 
                'method_details' => $encodedobject,
                'slug'=> $slug,
                'sr' => $sr,
            ]);        
      }
  
      public function methodcreate($slug){
        $service_api_controller = new PricingMethodApiController;
        $data = json_encode(array('datakey'=>"webapplication"));       
        $method = $service_api_controller->getAllMethods($data); 
        $encodedData= json_decode($method->content(),true);               
        $encodedobject=$encodedData['data'] ;
  
        return view('featrures.service.pricing.pricingCreate',[ 
          'methods' => $encodedobject,
          'slug' => $slug
      ]);        
        }
  
      public function methodstore(Request $request)
        {
          $validated = $request->validate([
            'method_title' => 'max:255',
            'position'=>'required'
        ]);
            $service_api_controller = new PricingMethodApiController; 
            $data1 = json_encode($request->all()); 
            $data2 = json_encode(array('datakey'=>"webapplication"));  
            $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
            $method = $service_api_controller->storeMethod($data); 
            $encodedData= json_decode($method->content(),true);     
            return redirect()->back()->with('success',$encodedData['message']);
            } 
  
    //pricing(methods unit)  view starts
    public function unitindex(){
        $sr = 0; 
        $service_api_controller = new PricingMethodApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $unit = $service_api_controller->getAllMethodUnits($data); 
        $encodedData= json_decode($unit->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
            return view('featrures.service.pricing.method_units.unitIndex',[ 
                'unit_details' => $encodedobject,
                'sr' => $sr,
            ]);        
      }
      public function unitcreate(){
        return view('featrures.service.pricing.method_units.unitCreate');
        }
      public function unitstore(Request $request)
        {
            $service_api_controller = new PricingMethodApiController; 
            $data1 = json_encode($request->all()); 
            $data2 = json_encode(array('datakey'=>"webapplication"));  
            $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
            $unit = $service_api_controller->storeUnit($data); 
            $encodedData= json_decode($unit->content(),true);     
            return redirect()->back()->with('success',$encodedData['message']);
            } 
  
}
