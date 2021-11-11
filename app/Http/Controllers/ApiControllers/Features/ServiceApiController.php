<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\Service;
use Illuminate\Support\Str; 



class ServiceApiController extends ApiController
{
   /**
       * Prepare For Faq.
       *
       * @param mixed $request
       * @author Manav PAndey
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
      public function getAllService($data){
        try{
            $servDb = Service::get(); 
            return $this->success($servDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }

    }

    public function storeService($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $serviceDb = new Service();   
             $serviceDb->title = $decodedData['title'];
            $serviceDb->description = $decodedData['description']; 
            $serviceDb->color = $decodedData['color']; 
            $serviceDb->image = $decodedData['image']; 
            $serviceDb->position = $decodedData['position']; 
            $serviceDb->slug = Str::slug($decodedData['title'], '-'); 
        //  $sliderDb->created_by = $this->user()->id;
           $serviceDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

    public function getServiceBySlug($data){
        try{
            $decodedData= json_decode($data,true); 
            $serviceDb = Service::where('slug',$decodedData['slug'])->first(); 
            // dd($serviceDb);
            return $this->success($serviceDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function getServiceIdBySlug($data){
        try{
            $decodedData= json_decode($data,true); 
            $serviceDb = Service::select('id')->where('slug',$decodedData['slug'])->first()['id']; 
            // dd($serviceDb);
            return $this->success($serviceDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function updateService($data){ 
        try{
             $decodedData= json_decode($data,true);
                Service::query()->where('id', $decodedData['id'])->update([
                'title' => $decodedData['title'],
                'description' => $decodedData['description'],
                'color' => $decodedData['color'],
                'image' => $decodedData['image'],
                'position' => $decodedData['position'],
                'slug' => Str::slug($decodedData['title'], '-'),
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
    }

    public function deleteService($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = Service::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    //services ends
    // //pricing {unit} Starts
    // public function getAllMethodUnits($data){
    //     try{
    //         $servDb = ServiceMethodsUnit::get(); 
    //         return $this->success($servDb,200);
    //     }catch(Exception $e){
    //         return $this->failed('Given data is not existis.',202);
    //     }

    // }

    // public function storeUnit($data){ 
    //     try{
    //          $decodedData= json_decode($data,true); 
    //          $serviceDb = new ServiceMethodsUnit();   
    //          $serviceDb->service_id = $decodedData['service_id'];
    //          $serviceDb->methods_id = $decodedData['method_id'];
    //          $serviceDb->units_title = $decodedData['unit_title'];
    //          $serviceDb->base_price = $decodedData['base_price'];
    //          $serviceDb->min_limit = $decodedData['min_limit'];
    //          $serviceDb->max_limit = $decodedData['max_limit'];
    //         $serviceDb->position = $decodedData['position']; 
    //         $serviceDb->limit_title = $decodedData['limit_title'];
    //         $serviceDb->unit_symbol = $decodedData['unit_symbol'];
    //         $serviceDb->half_section = $decodedData['half_section'];
    //         $serviceDb->uduration = $decodedData['duration'];
    //         $serviceDb->slug = Str::slug($decodedData['unit_title'], '-'); 
    //     //  $sliderDb->created_by = $this->user()->id;
    //        $serviceDb->save(); 
    //          return $this->successMessage('Added Successfully.',200);
    //     }catch(Exception $e){
    //         return $this->failed('Given table is not existis.',202);
    //     }
       
    }
    //addon ends , pricing (method) starts
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
             if(!empty($decodedData['method_title'])){
                $methodDb = new Method();   
                $methodDb->method_title = $decodedData['method_title'];
                $methodDb->slug = Str::slug($decodedData['method_title'], '-'); 
                $methodDb->save(); 
                $method_id= $methodDb->id;
             }
             else{
                $method_id= $decodedData['method_title_id'];
             }

             $service_methodDb = new ServicesMethod();   
             $service_methodDb->service_id = $decodedData['service_id'];
            $service_methodDb->method_id = $method_id;  
        //  $sliderDb->created_by = $this->user()->id;
           $service_methodDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
//pricing(method units) start
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