<?php

namespace App\Http\Controllers\ApiControllers\Schedule;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use \App\Models\ScheduleBreak;
use Illuminate\Support\Str;

class ScheduleBreakApiController extends ApiController
{
    /**
       * Prepare For ScheduleBreak.
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
      public function getAllScheduleBreak($data){
        try{
            $ScheduleBreakDb = ScheduleBreak::get(); 
            return $this->success($ScheduleBreakDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getScheduleBreak($data){
        try{
            $ScheduleBreakDb = ScheduleBreak::find($data); 
            return $this->success($ScheduleBreakDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeScheduleBreak($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $ScheduleBreak = new ScheduleBreak();   
             $startdate = $decodedData['start-date'];
             $enddate = $decodedData['end-date'];
             $ScheduleBreak->week_id= date("W", strtotime($startdate));
             $ScheduleBreak->weekday_id= date("d", strtotime($startdate));
             $ScheduleBreak->break_start= $startdate;
             $ScheduleBreak->break_end= $enddate;
                  
            $ScheduleBreak->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateScheduleBreak($data){ 
        try{
             $decodedData= json_decode($data,true);
        
                ScheduleBreak::query()->where('id', $decodedData['id'])->update([
                'break_start' => $decodedData['start-date'],
                'break_end' => $decodedData['end-date'],
                
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function deleteScheduleBreak($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = ScheduleBreak::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
}
