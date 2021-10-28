<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\ServicesMethod;
use\App\Models\ServiceMethodsUnit;
use\App\Models\Method;
use Illuminate\Support\Str; 

class PricingMethodApiController extends ApiController
{
        //pricing (method) starts
        public function getAllMethods($data){
            try{
                $methodDb = Method::get(); 
                return $this->success($methodDb,200);
            }catch(Exception $e){
                return $this->failed('Given data is not existis.',202);
            }
    
        }
        public function getServiceMethods($data){
            try{
                $decodedData= json_decode($data,true);
                // dd($decodedData);
                // $serviceId = Service::select('id')->where('slug',$decodedData['slug'])->first()['id'];
                 $servDb = Method::get(); 
                // // dd($servDb);
                return $this->success($servDb,200);
            }catch(Exception $e){
                return $this->failed('Given data is not existis.',202);
            }
    
        }
    
    
        public function storeMethod($data){ 
            try{
                 $decodedData= json_decode($data,true); 
                 $methodDb = new Method();   
                 $methodDb->method_title = $decodedData['method_title'];
                $methodDb->position = $decodedData['position']; 
                $methodDb->slug = Str::slug($decodedData['method_title'], '-'); 
            //  $sliderDb->created_by = $this->user()->id;
               $methodDb->save(); 
                 return $this->successMessage('Added Successfully.',200);
            }catch(Exception $e){
                return $this->failed('Given table is not existis.',202);
            }
           
        }

    //pricing {unit} Starts
        public function getAllMethodUnits($data){
            try{
                $servDb = ServiceMethodsUnit::get(); 
                return $this->success($servDb,200);
            }catch(Exception $e){
                return $this->failed('Given data is not existis.',202);
            }

        }

        public function storeUnit($data){ 
            try{
                $decodedData= json_decode($data,true); 
                $serviceDb = new ServiceMethodsUnit();   
                $serviceDb->service_id = $decodedData['service_id'];
                $serviceDb->methods_id = $decodedData['method_id'];
                $serviceDb->units_title = $decodedData['unit_title'];
                $serviceDb->base_price = $decodedData['base_price'];
                $serviceDb->min_limit = $decodedData['min_limit'];
                $serviceDb->max_limit = $decodedData['max_limit'];
                $serviceDb->position = $decodedData['position']; 
                $serviceDb->limit_title = $decodedData['limit_title'];
                $serviceDb->unit_symbol = $decodedData['unit_symbol'];
                $serviceDb->half_section = $decodedData['half_section'];
                $serviceDb->uduration = $decodedData['duration'];
                $serviceDb->slug = Str::slug($decodedData['unit_title'], '-'); 
            //  $sliderDb->created_by = $this->user()->id;
            $serviceDb->save(); 
                return $this->successMessage('Added Successfully.',200);
            }catch(Exception $e){
                return $this->failed('Given table is not existis.',202);
            }
        
        }
}
