<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\Faq;
use Illuminate\Support\Str;
class FaqApiController extends ApiController
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
    public function getAllFaq($data){
        try{
            $faqDb = Faq::get(); 
            return $this->success($faqDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getFaq($data){
        try{
            $faqDb = Faq::find($data); 
            return $this->success($faqDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeFaq($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $faq = new Faq();   
             $title = $decodedData['title'];
             $faq->title =  $title;
             $faq->detail = $decodedData['description']; 
            $faq->type = $decodedData['type'];  
            $faq->slug = Str::slug($title, '-');
            $faq->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateFaq($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                Faq::query()->where('id', $decodedData['id'])->update([
                'title' => $decodedData['title'],
                'detail' => $decodedData['description'],
                'type' => $decodedData['type'],
                'slug' => Str::slug($decodedData['title'], '-'),
                'is_activate' =>$is_activate,
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function deleteFaq($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = Faq::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}
