<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use App\Http\Controllers\ApiControllers\Schedule\ScheduleBreakApiController;
use App\Models\ScheduleBreak;

class ScheduleBreakBackendController extends BackendController
{
   
    public function index()
    {
     $sr = 0; 
     $ScheduleBreak_api_controller = new ScheduleBreakApiController; 
     $data = json_encode(array('datakey'=>"webapplication"));       
     $schedule = $ScheduleBreak_api_controller->getAllScheduleBreak($data); 
     $encodedData= json_decode($schedule->content(),true);               
     $encodedobject=$encodedData['data'] ;
     $data=ScheduleBreak::get();
     return view('schedule.scheduleBreak', [
       'schedule_breaks' =>  $encodedobject,
       'sr' => $sr,
     
       ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start-date' => 'required',
            'end-date' => 'required',
            
        ]);
        $ScheduleBreak_api_controller = new ScheduleBreakApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $ScheduleBreak = $ScheduleBreak_api_controller->storeScheduleBreak($data);
        $encodedData= json_decode($ScheduleBreak->content(),true);     
        
        return redirect()->back()->with('success',$encodedData['message']);
        } 
 
     public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'start-date' => 'required',
                'end-date' => 'required',
                
            ]);
            $ScheduleBreak_api_controller = new ScheduleBreakApiController;
            $data1 = json_encode($request->all()); 
            $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
            $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
            $ScheduleBreak = $ScheduleBreak_api_controller->updateScheduleBreak($data);
            $encodedData= json_decode($ScheduleBreak->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
        public function destroy($id){
            $ScheduleBreak_api_controller = new ScheduleBreakApiController;
            $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
            $ScheduleBreak = $ScheduleBreak_api_controller->deleteScheduleBreak($data);
            $encodedData= json_decode($ScheduleBreak->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
}
