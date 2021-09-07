<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\EmailTemplate;
use Illuminate\Support\Str;

class EmailTemplateApiController extends ApiController
{
  /**
       * Prepare For Email Template.
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
      public function getAllEmailTemplate($data){
        try{
            $emailDb = EmailTemplate::get(); 
            return $this->success($emailDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getEmailTemplate($data){
        try{
            $emailDb = EmailTemplate::find($data); 
            return $this->success($emailDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeEmailTemplate($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $emailDb = new EmailTemplate();   
             $emailDb->email_type =  $decodedData['email_type'];
             $emailDb->email_subject = $decodedData['email_subject']; 
            $emailDb->email_body = $decodedData['body'];  
            $emailDb->slug = Str::slug($decodedData['email_type'], '-');
            $emailDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateEmailTemplate($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                EmailTemplate::query()->where('id', $decodedData['id'])->update([
                'email_type' => $decodedData['email_type'],
                'email_subject' => $decodedData['email_subject'],
                'email_body' => $decodedData['body'],
                'slug' => Str::slug($decodedData['email_type'], '-'),
                'is_activate' =>$is_activate,
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function deleteEmailTemplate($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = EmailTemplate::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}
