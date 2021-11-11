<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use App\Http\Controllers\ApiControllers\Schedule\ScheduleBreakCalenderApiController;
use App\Models\ScheduleBreak;


class ScheduleCalenderBackendController extends Controller
{
    public function index()
    {
     $sr = 0; 
     $ScheduleBreakCalender_api_controller = new ScheduleBreakCalenderApiController; 
     $data = json_encode(array('datakey'=>"webapplication"));       
     $schedule = $ScheduleBreakCalender_api_controller->getAllScheduleBreakCalender($data); 
     $encodedData= json_decode($schedule->content(),true);               
     $encodedobject=$encodedData['data'] ;
     $data=ScheduleBreak::get();
     return view('schedule.scheduleBreakCalender', [
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
        $ScheduleBreakCalender_api_controller = new ScheduleBreakCalenderApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $ScheduleBreak = $ScheduleBreakCalender_api_controller->storeScheduleBreakCalender($data);
        $encodedData= json_decode($ScheduleBreak->content(),true);     
        
        return redirect()->back()->with('success',$encodedData['message']);
        } 
 
     public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'start-date' => 'required',
                'end-date' => 'required',
                
            ]);
            $ScheduleBreakCalender_api_controller = new ScheduleBreakCalenderApiController;
            $data1 = json_encode($request->all()); 
            $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
            $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
            $ScheduleBreak = $ScheduleBreakCalender_api_controller->updateScheduleBreakCalender($data);
            $encodedData= json_decode($ScheduleBreak->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
        public function destroy($id){
            $ScheduleBreakCalender_api_controller = new ScheduleBreakCalenderApiController;
            $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
            $ScheduleBreak = $ScheduleBreakCalender_api_controller->deleteScheduleBreakCalender($data);
            $encodedData= json_decode($ScheduleBreak->content(),true);
            return redirect()->back()->with('success',$encodedData['message']);
        }
}
