<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Configration;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Configration\UserConfigrationApiController;
use App\Http\Controllers\ApiControllers\Configration\RoleApiController;
class UserConfigrationBackendController extends BackendController
{
   /**
       * Prepare For UserConfigration.
       *
       * @param mixed $request
       * @author Utkarsh Junghare 
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
             $u_config_api_controller = new UserConfigrationApiController; 
             $data = json_encode(array('datakey'=>"webapplication"));
             $usersDb = $u_config_api_controller->getAllUsers($data);
             $encodedData= json_decode($usersDb->content(),true);               
             $encodedobject=$encodedData['data'] ;            
             $role_api_controller = new RoleApiController; 
             $role = $role_api_controller->getAllRole($data);
             $encodedData1= json_decode($role->content(),true);  
             $encodedobject2 = $encodedData1['data'] ;
              return view('configration.user', [
                  'users' =>  $encodedobject,
                  'sr' => $sr,
                  'roles' => $encodedobject2,
                  ]);
   
      }
   
      public function store(Request $request)
      {
       $validated = $request->validate([ 
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'user_type'=> ['required'],
        'mobile_number' => ['required', 'numeric', 'min:10'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);
       $u_config_api_controller = new UserConfigrationApiController; 
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('datakey'=>"webapplication"));  
       $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $user = $u_config_api_controller->storeUser($data);
       $encodedData= json_decode($user->content(),true);     
       return redirect()->back()->with('success',$encodedData['message']);
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
       $u_config_api_controller = new UserConfigrationApiController;
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
       $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $user = $u_config_api_controller->updateUser($data);
       $encodedData= json_decode($user->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
   
      public function destroy($id)
      {
       $u_config_api_controller = new UserConfigrationApiController;
       $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
       $user = $u_config_api_controller->deleteUser($data);
       $encodedData= json_decode($user->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
}
