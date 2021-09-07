<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\HeaderSlider;
use Illuminate\Support\Str;

class SliderApiController extends ApiController
{ 
     /**
       * Prepare For Faq.
       *
       * @param mixed $request
       * @author Utkarsh Junghare 
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
      public function getAllSlider($data){
        try{
            $sliderDb = HeaderSlider::get(); 
            return $this->success($sliderDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function getSlider($data){
        try{
            $sliderDb = HeaderSlider::find($data); 
            return $this->success($sliderDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function getSliderBySlug($data){
        try{
            $decodedData= json_decode($data,true); 
            $sliderDb = HeaderSlider::where('slug',$decodedData['slug'])->where('is_activate',true)->first(); 
            return $this->success($sliderDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    
    public function storeSlider($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $sliderDb = new HeaderSlider();   
             $sliderDb->slider_for = $decodedData['slider_for'];
             $sliderDb->images = $decodedData['images'];

           $sliderDb->description = $decodedData['description']; 
           $sliderDb->slug = Str::slug($decodedData['slider_for'], '-'); 
        //    $sliderDb->created_by = $this->user()->id;
           $sliderDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    // public function updateSlider($data){ 
    //     try{
    //          $decodedData= json_decode($data,true);
    //         if($decodedData['status'] === 'true'){
    //              $is_activate=true;
    //            }
    //            else
    //             $is_activate = false;
    //             Faq::query()->where('id', $decodedData['id'])->update([
    //             'title' => $decodedData['title'],
    //             'detail' => $decodedData['description'],
    //             'type' => $decodedData['type'],
    //             'slug' => Str::slug($decodedData['title'], '-'),
    //             'is_activate' =>$is_activate,
    //              ]);
       
    //           return $this->successMessage('Updated Successfully.',200);
    //     }catch(Exception $e){
    //         return $this->failed('Given table is not existis.',202);
    //     }
       
    // }
    public function deleteSlider($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = HeaderSlider::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
   
}
