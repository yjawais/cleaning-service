<?php

namespace App\Http\Controllers\ApiControllers\Schedule;

use App\Http\Controllers\ApiControllers\ApiController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\ScheduleOfftime;

class ScheduleOfftimeApiController extends ApiController
{
    /**
       * Prepare For ScheduleOfftime.
       *
       * @param mixed $request
       * @author awais sheikh
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
      public function getAllScheduleOfftime($data){
        try{
            $ScheduleOfftimeDb = ScheduleOfftime::get(); 
            return $this->success($ScheduleOfftimeDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getScheduleOfftime($data){
        try{
            $ScheduleOfftimeDb = ScheduleOfftime::find($data); 
            return $this->success($ScheduleOfftimeDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeScheduleOfftime($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $ScheduleOfftime = new ScheduleOfftime();   
             $starttime = $decodedData['start-time'];
             $endtime = $decodedData['end-time'];
             $ScheduleOfftime->start_date_time= $starttime;
             $ScheduleOfftime->end_date_time= $endtime;
                   
            $ScheduleOfftime->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateScheduleOfftime($data){ 
        try{
             $decodedData= json_decode($data,true);
        
                ScheduleOfftime::query()->where('id', $decodedData['id'])->update([
                'start_date_time' => $decodedData['start-time'],
                'end_date_time' => $decodedData['end-time'],
                
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function deleteScheduleOfftime($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = ScheduleOfftime::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}
