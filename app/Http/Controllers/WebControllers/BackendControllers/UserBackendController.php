<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\WebControllers\BackendControllers;
//namespace App\Http\Controllers\ApiControllers\User;

use App\Http\Controllers\ApiControllers\Configration\RoleApiController;
// use App\Http\Controllers\ApiControllers\Role\User\UserApiController;
use App\Http\Controllers\ApiControllers\UserApiController;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;

use Illuminate\Http\Request;

class UserBackendController extends BackendController
{

   /**
       * Prepare For UserApiControlller.
       *
       * @param mixed $request
       * @author Unnati Gawhale
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
             $user_api_controller = new UserApiController; 
             $data = json_encode(array('datakey'=>"webapplication"));
             $usersDb = $user_api_controller->getAllUser($data);
             $encodedData= json_decode($usersDb->content(),true);               
             $encodedobject=$encodedData['data'] ;  
           //  dd($encodedobject);       
             $role_api_controller = new RoleApiController; 
             $role = $role_api_controller->getAllRole($data);
             $encodedData1= json_decode($role->content(),true);  
             $encodedobject2 = $encodedData1['data'] ;
                       //  dd($encodedobject2);       

              return view('user.userIndex', [
                  'users' =>  $encodedobject,
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

        return view('user.userCreate',[                
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
       $user_api_controller = new UserApiController; 
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('datakey'=>"webapplication"));  
       //dd($data2);
       $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       //dd($data);
       $user = $user_api_controller->storeUser($data);
       $encodedData= json_decode($user->content(),true); 
       return redirect()->back()->with('success',$encodedData['message']);

      }
      //Store function ends

      //Show function starts
      public function show( $id){
        $user_api_controller = new UserApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));   
        //dd($data);    
        $user = $user_api_controller->getUser($data); 
              //  dd($user);
        $encodedData= json_decode($user->content(),true);               
        $encodedobject=$encodedData['data'] ;
        //dd($encodedobject);
        $role_api_controller = new RoleApiController; 
        $role = $role_api_controller->getRole($data);
        $encodedData1= json_decode($role->content(),true);  
        $encodedobject2 = $encodedData1['data'] ;
                  //   dd($encodedobject2); 
        return view('user.userShow',[
            'user' => $encodedobject,
            'roles' => $encodedobject2,
          ]);
        }
      //Show function ends


      //Edit function starts
      public function edit( $id){
        $user_api_controller = new UserApiController; 
        $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));       
        $user = $user_api_controller->getUser($data); 
     // dd($user);
        $encodedData= json_decode($user->content(),true);               
        $encodedobject=$encodedData['data'] ;
       // dd($encodedobject);
       $role_api_controller = new RoleApiController; 
       $role = $role_api_controller->getAllActiveRole($data);
       $encodedData1= json_decode($role->content(),true);  
       $encodedobject2 = $encodedData1['data'] ;
                 //   dd($encodedobject2);
        return view('user.userEdit',[
            'user' => $encodedobject,
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
       $user_api_controller = new UserApiController;
       $data1 = json_encode($request->all()); 
       $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
       $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
       $user = $user_api_controller->updateUser($data);
       $encodedData= json_decode($user->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
      //Update function ends

      //Destroy function starts
      public function destroy($id)
      {
       $user_api_controller = new UserApiController;
       $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
       $user = $user_api_controller->deleteUser($data);
       $encodedData= json_decode($user->content(),true);
       return redirect()->back()->with('success',$encodedData['message']);
      }
      //Destroy function ends
    }