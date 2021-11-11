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
       * Prepare For StaffApiControlller.
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

      //Index function starts
      public function index()
      {
             $sr = 0;
             $staff_api_controller = new StaffApiController; 
             $data = json_encode(array('datakey'=>"webapplication"));
             $usersDb = $staff_api_controller->getAllStaff($data);
             $encodedData= json_decode($usersDb->content(),true);               
             $encodedobject=$encodedData['data'] ;  
           //  dd($encodedobject);       
             $role_api_controller = new RoleApiController; 
             $role = $role_api_controller->getAllRole($data);
             $encodedData1= json_decode($role->content(),true);  
             $encodedobject2 = $encodedData1['data'] ;
                       //  dd($encodedobject2);       

              return view('Staff.StaffIndex', [
                  'staffs' =>  $encodedobject,
                  'sr' => $sr,
                'roles' => $encodedobject2,
                  ]);
   
      }
      //Index function ends
   
      //Create function starts
      public function create(){
        $data = json_encode(array('datakey'=>"webapplication"));
        $role_api_controller = new RoleApiController; 
        $role = $role_api_controller->getAllActiveRole($data);
        $encodedData1= json_decode($role->content(),true);  
        $encodedobject2 = $encodedData1['data'] ;
                  //  dd($encodedobject2);       

        return view('Staff.StaffCreate',[                
          'roles' => $encodedobject2,

      ]);
  
      }
      //Create function ends

      //Store function starts
      public function store(Request $request)
      {
      //below is the validation for user input data
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
       //dd($data2);
       $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       //dd($data);
       $staff = $staff_api_controller->storeStaff($data);
       $encodedData= json_decode($staff->content(),true); 
       return redirect()->back()->with('success',$encodedData['message']);

      }
      //Store function ends

      //Show function starts
      public function show( $id){
        $staff_api_controller = new StaffApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));   
        //dd($data);    
        $staff = $staff_api_controller->getStaff($data); 
              //  dd($staff);
        $encodedData= json_decode($staff->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
        $role_api_controller = new RoleApiController; 
        $role = $role_api_controller->getRole($data);
        $encodedData1= json_decode($role->content(),true);  
        $encodedobject2 = $encodedData1['data'] ;
                  //   dd($encodedobject2); 
        return view('Staff.StaffShow',[
            'staff' => $encodedobject,
            'roles' => $encodedobject2,
          ]);
        }
      //Show function ends


      //Edit function starts
      public function edit( $id){
        $staff_api_controller = new StaffApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));       
        $staff = $staff_api_controller->getStaff($data); 
     // dd($staff);
        $encodedData= json_decode($staff->content(),true);               
        $encodedobject=$encodedData['data'] ;
       // dd($encodedobject);
       $role_api_controller = new RoleApiController; 
       $role = $role_api_controller->getAllActiveRole($data);
       $encodedData1= json_decode($role->content(),true);  
       $encodedobject2 = $encodedData1['data'] ;
                 //   dd($encodedobject2);
        return view('Staff.StaffEdit',[
            'staff' => $encodedobject,
            'roles' => $encodedobject2,
        ]);
      }
      //Edit function ends

      //Update function starts
      public function update(Request $request, $id)
      {
      //below is the validation for user input data
       $validated = $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'mobile_number' => ['required', 'numeric', 'min:10'],
     //   'user_type'=> ['required'],
       ]);
       $staff_api_controller = new StaffApiController;
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
       $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $staff = $staff_api_controller->updateStaff($data);
       $encodedData= json_decode($staff->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
      //Update function ends

      //Destroy function starts
      public function destroy($id)
      {
       $staff_api_controller = new StaffApiController;
       $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
       $Staff = $staff_api_controller->deleteStaff($data);
       $encodedData= json_decode($Staff->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
      //Destroy function ends
    }