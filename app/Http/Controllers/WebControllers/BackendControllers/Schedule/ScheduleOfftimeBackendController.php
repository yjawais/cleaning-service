<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use App\Http\Controllers\ApiControllers\Schedule\ScheduleOfftimeApiController;
use App\Models\ScheduleOfftime;


class ScheduleOfftimeBackendController extends BackendController
{
   
    public function index()
    {
     $sr = 0; 
     $ScheduleOfftime_api_controller = new ScheduleOfftimeApiController; 
     $data = json_encode(array('datakey'=>"webapplication"));       
     $schedule = $ScheduleOfftime_api_controller->getAllScheduleOfftime($data); 
     $encodedData= json_decode($schedule->content(),true);               
     $encodedobject=$encodedData['data'] ;
     $data=ScheduleOfftime::get();
     return view('schedule.ScheduleOfftime', [
       'schedule_offtimes' =>  $encodedobject,
       'sr' => $sr,
     
       ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start-time' => 'required',
            'end-time' => 'required',
            
        ]);
        $ScheduleOfftime_api_controller = new ScheduleOfftimeApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $ScheduleOfftime = $ScheduleOfftime_api_controller->storeScheduleOfftime($data);
        $encodedData= json_decode($ScheduleOfftime->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        } 
 
     public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'start-time' => 'required',
                'end-time' => 'required',
                
            ]);
            $ScheduleOfftime_api_controller = new ScheduleOfftimeApiController;
            $data1 = json_encode($request->all()); 
            $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
            $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
            $ScheduleOfftime = $ScheduleOfftime_api_controller->updateScheduleOfftime($data);
            $encodedData= json_decode($ScheduleOfftime->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
        public function destroy($id){
            $ScheduleOfftime_api_controller = new ScheduleOfftimeApiController;
            $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
            $ScheduleOfftime = $ScheduleOfftime_api_controller->deleteScheduleOfftime($data);
            $encodedData= json_decode($ScheduleOfftime->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
}

