<?php

namespace App\Http\Controllers\ApiControllers\Features;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use\App\Models\SmsTemplate;
use Illuminate\Support\Str;

class SmsTemplateApiController extends ApiController
{
     /**
       * Prepare For SMS.
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
    public function getAllSmsTemplate($data){
        try{
            $smsDb = SmsTemplate::get(); 
            return $this->success($smsDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getSmsTemplate($data){
        try{
            $smsDb = SmsTemplate::find($data); 
            return $this->success($smsDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeSmsTemplate($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $smsDb = new SmsTemplate();   
             $smsDb->sms_type =  $decodedData['sms_type'];
             $smsDb->sms_body = $decodedData['body'];  
             $smsDb->slug = Str::slug($decodedData['sms_type'], '-');
             $smsDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateSmsTemplate($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                SmsTemplate::query()->where('id', $decodedData['id'])->update([
                'sms_type' => $decodedData['sms_type'],
                'sms_body' => $decodedData['body'],
                'slug' => Str::slug($decodedData['sms_type'], '-'),
                'is_activate' =>$is_activate,
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function deleteSmsTemplate($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = SmsTemplate::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}
