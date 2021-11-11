<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\ApiControllers\UserApiController;
use App\Http\Controllers\ApiControllers\ApiController;

namespace App\Http\Controllers\ApiControllers;
use App\Models\Role;
use App\Models\User;
use App\Models\RoleUser;
use Exception;

use Illuminate\Http\Request;

class UserApiController extends ApiController
{


     /**
       * Prepare For User.
       *
       * @param mixed $request
       * @author Unnati Gawhale
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

    // This function will display all user details from users table in the userIndex page
    // GetAllUser function starts

    public function getAllUser ($data){  
       
        try{
            $role_id=Role::select('id')->where('name','user')->first()['id'];
            $role_users=RoleUser::select('user_id')->where('role_id',$role_id)->get();
        //    dd($role_users);3,9,10,11,12,13

            foreach ($role_users as $role_user){
              $role_user['user'] = User::where('id', $role_user->user_id)->first();
              //dd($role_user);
                  }
            return $this->success($role_users,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    // GetAllUser  function ends


    // This function will display specific user  detail depending to their id on the userShow and userEdit page
    // GetUser  function starts

    public function getUser ($data){
        try{
         //   $role_users = User::find($data); 
            $decodedData= json_decode($data,true); 
            $role_users = User::where('id',$decodedData['id'])->first(); 
          // dd($role_users);
            return $this->success($role_users,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    // GetUser  function ends


    // This function contains store data logic for the user when clicked on submit button on userCreate page with respect to the partricular user id
    // StoreUser  function starts

    public function storeUser ($data){ 
        try{ 
             $decodedData= json_decode($data,true); 
             $user = new User();
             $user_type = $decodedData['user_type'];
             $user->fname = $decodedData['fname'];
             $user->lname = $decodedData['lname'];
            $user->email = $decodedData['email'];
            $user->mobile_number = $decodedData['mobile_number'];
         //   $user->password = Hash::make($decodedData['password']);
             $user->save(); 
             $user->roles()
             ->attach(Role::where('name', $user_type)->first());  
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    // StoreUser  function ends

 
    // This function contains update data logic for the user  when clicked on edit button on userIndex page according to the partricular user id
    // UpdateUser function starts

    public function updateUser ($data){ 
       try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else 
                $is_activate = false;
                User::query()->where('id', $decodedData['id'])->update([
                'fname' => $decodedData['fname'],
                'lname' => $decodedData['lname'],
                'email' => $decodedData['email'],
                'mobile_number' => $decodedData['mobile_number'],
                'email_verified_at' => $decodedData['email_verified_at']
                 ]);
                 RoleUser::query()->where('role_id', $decodedData['role_id'])->where('user_id', $decodedData['id'])->update([
                    'role_id' =>  $decodedData['user_type'],
                    'is_activate' => $is_activate,
                     ]);
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    } 
    // UpdateUser  function ends


    // This function will delete the user when clicked on delete button on userIndex page according to the partricular user id
    // DeleteUser  function starts
   
    public function deleteUser ($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model =  RoleUser::find($decodedData['id']);
             $user_id = $model->user_id;
             $model->delete(); 
             $model1 =  User::where('id',$user_id)->first();            
             $model1->delete();
            //  $model2 =  UserDetail::where('user_id',$user_id)->first();
            //  $model2->delete();      
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    // DeleteUser  function ends

}