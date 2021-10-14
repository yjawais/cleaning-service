<?php

namespace App\Http\Controllers\WebControllers\BackendControllers;
//namespace App\Http\Controllers\ApiControllers\Staff;

use App\Http\Controllers\ApiControllers\Configration\RoleApiController;
use App\Http\Controllers\ApiControllers\StaffApiController;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;

class StaffBackendController extends BackendController

{
   /**
       * Prepare For UserConfigration.
       *
       * @param mixed $request
       * @author Anjali Gaikwad
       * Request={
       *    "title":"title",
       *    "body":"body",
       *         }
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
      public function index()
      {
             $sr = 0;
             $staff_api_controller = new StaffApiController; 
             $data = json_encode(array('datakey'=>"webapplication"));
             $usersDb = $staff_api_controller->getAllStaff($data);
             $encodedData= json_decode($usersDb->content(),true);               
             $encodedobject=$encodedData['data'] ;            
             $role_api_controller = new RoleApiController; 
             $role = $role_api_controller->getRole($data);
             $encodedData1= json_decode($role->content(),true);  
             $encodedobject2 = $encodedData1['data'] ;
              return view('Staff.StaffIndex', [
                  'staff' =>  $encodedobject,
                  'sr' => $sr,
                  'roles' => $encodedobject2,
                  ]);
   
      }
   
      public function create(){
        return view('Staff.StaffCreate');
  
      }

      public function store(Request $request)
      {
       $validated = $request->validate([ 
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
       'user_type'=> ['required'],
        'mobile_number' => ['required', 'numeric', 'min:10'],
    //    'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);
       $staff_api_controller = new StaffApiController; 
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('datakey'=>"webapplication"));  
       $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $staff = $staff_api_controller->storeStaff($data);
       $encodedData= json_decode($staff->content(),true); 
       $encodedobject=$encodedData['data'] ;    
       return redirect()->back()->with('success',$encodedData['message']);

      }

      public function show( $id){
        $staff_api_controller = new StaffApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $staff = $staff_api_controller->getStaff($data); 
        $encodedData= json_decode($staff->content(),true);               
        $encodedobject=$encodedData['data'] ;
        // dd($encodedobject);
        return view('Staff.StaffShow',[
            'staff' => $encodedobject,
        ]);
        }

      public function edit( $id){
        $staff_api_controller = new StaffApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $staff = $staff_api_controller->getStaff($data); 
        $encodedData= json_decode($staff->content(),true);               
        $encodedobject=$encodedData['data'] ;
        // dd($encodedobject);
        return view('Staff.StaffEdit',[
            'staff' => $encodedobject,
        ]);
      }

      public function update(Request $request, $id)
      {
       $validated = $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'mobile_number' => ['required', 'numeric', 'min:10'],
        'user_type'=> ['required'],
       ]);
       $staff_api_controller = new StaffApiController;
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
       $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $staff = $staff_api_controller->updateStaff($data);
       $encodedData= json_decode($staff->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
   
      public function destroy($id)
      {
       $staff_api_controller = new StaffApiController;
       $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
       $Staff = $staff_api_controller->deleteStaff($data);
       $encodedData= json_decode($Staff->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
}