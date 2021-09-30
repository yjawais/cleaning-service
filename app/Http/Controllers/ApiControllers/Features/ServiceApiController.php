<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\Service;
use\App\Models\ServiceAddon;
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
    //services ends ,addon starts

    public function getAllAddon($data){
        try{
            $servDb = ServiceAddon::get(); 
            return $this->success($servDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }

    }
    
    public function storeAddon($data){ 
        try{
            $decodedData= json_decode($data,true); 
            $serviceDb = new ServiceAddon();   
            $serviceDb->service_id = $decodedData['serviceid'];
            $serviceDb->service_name = $decodedData['servicename'];
            $serviceDb->base_price = $decodedData['baseprice'];
            $serviceDb->max_quantity = $decodedData['maxquantity'];
            $serviceDb->image = $decodedData['image']; 
            $serviceDb->multiple_quantity = $decodedData['multiplequantity'];
            $serviceDb->position = $decodedData['position']; 
            $serviceDb->predefine_image = $decodedData['predefineimage'];
            $serviceDb->predefine_image_title = $decodedData['predefineimagetitle'];
            $serviceDb->addon_description = $decodedData['addondescription']; 
            $serviceDb->duration = $decodedData['duration']; 
            $serviceDb->slug = Str::slug($decodedData['servicename'], '-'); 
        //  $sliderDb->created_by = $this->user()->id;
           $serviceDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

    public function getAddonBySlug($data){
        try{
            $decodedData= json_decode($data,true); 
            $serviceDb = ServiceAddon::where('slug',$decodedData['slug'])->first(); 
            // dd($serviceDb);
            return $this->success($serviceDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function updateAddon($data){ 
        try{
             $decodedData= json_decode($data,true);
                ServiceAddon::query()->where('id', $decodedData['id'])->update([
                //dd($decodedData)
                'service_id' => $decodedData['serviceid'],
                'service_name' => $decodedData['servicename'],
                'base_price' => $decodedData['baseprice'],
                'max_quantity' => $decodedData['maxquantity'],
                'image' => $decodedData['image'],
                'multiple_quantity' => $decodedData['multiplequantity'],
                'position' => $decodedData['position'],
                'predefine_image' => $decodedData['predefineimage'],
                'predefine_image_title' => $decodedData['predefineimagetitle'],
                'addon_description' => $decodedData['addondescription'],
                'duration' => $decodedData['duration'],
                'slug' => Str::slug($decodedData['servicename'], '-'),
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
    }

    public function deleteAddon($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = ServiceAddon::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}