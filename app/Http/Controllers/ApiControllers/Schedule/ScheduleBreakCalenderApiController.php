<?php

namespace App\Http\Controllers\ApiControllers\Schedule;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use \App\Models\ScheduleBreak;
use Illuminate\Support\Str;

class ScheduleBreakCalenderApiController extends ApiController
{
    /**
       * Prepare For ScheduleBreakCalender.
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
      public function getAllScheduleBreakCalender($data){
        try{
            $ScheduleBreakCalenderDb = ScheduleBreak::get(); 
            return $this->success($ScheduleBreakCalenderDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getScheduleBreakCalender($data){
        try{
            $ScheduleBreakCalenderDb = ScheduleBreak::find($data); 
            return $this->success($ScheduleBreakCalenderDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeScheduleBreakCalender($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $ScheduleBreakCalender = new ScheduleBreak();   
             $startdate = $decodedData['start-date'];
             $enddate = $decodedData['end-date'];
             $ScheduleBreakCalender->week_id= date("W", strtotime($startdate));
             $ScheduleBreakCalender->weekday_id= date("d", strtotime($startdate));
             $ScheduleBreakCalender->break_start= $startdate;
             $ScheduleBreakCalender->break_end= $enddate;
                  
            $ScheduleBreakCalender->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    public function updateScheduleBreakCalender($data){ 
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
    public function deleteScheduleBreakCalender($data){ 
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
