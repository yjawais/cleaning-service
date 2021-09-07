<?php

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LangCode;
class LanguageCodeApiController extends ApiController
{
    /**
       * Prepare For Language code.
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
      public function getAllLanguadeCode($data){ 
        try{
            $languageDb = LangCode::latest()->get();
            return $this->success($languageDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getLanguadeCode($data){
        try{
            $languageDb = LangCode::find($data); 
            return $this->success($languageDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeLanguadeCode($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $language = new LangCode();  
            $language->name = $decodedData['name'];
            $language->description = $decodedData['description'];
            $language->slug = Str::slug($decodedData['name'], '-');
            $language->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

    public function updateLanguadeCode($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                LangCode::query()->where('id', $decodedData['id'])->update([
                'name' => $decodedData['name'],
                'description' => $decodedData['description'],
                'slug' => Str::slug($decodedData['title'], '-'),
                'is_activate' =>$is_activate,
                 ]);       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    } 

    public function deleteLanguadeCode($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = LangCode::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

} 
