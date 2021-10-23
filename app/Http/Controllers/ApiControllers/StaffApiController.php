<?php

namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\RoleUser;
use Exception;

class StaffApiController extends ApiController
{

     /**
       * Prepare For Staff.
       *
       * @param mixed $request
       * @author Anjali Gaikwad
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

    // This function will display all staff details from users table in the StaffIndex page
    // GetAllStaff function starts

    public function getAllStaff($data){  
        try{
            $userDb = User::get(); 
          //  dd($userDb);
            return $this->success($userDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
        // try{
        //     $role_id=Role::select('id')->where('name','staff')->first()['id'];
        //     $role_users=RoleUser::select('user_id')->where('role_id',$role_id)->get();
        //    //dd($role_users);
        //     foreach ($role_users as $role_user){
        //       $role_user['user'] = User::where('id', $role_user->user_id)->first();
        //       //dd($role_user);
        //           }
        //     return $this->success($role_users,200);
        // }catch(Exception $e){
        //     return $this->failed('Given data is not existis.',202);
        // }
       
    }
    // GetAllStaff function ends


    // This function will display specific staff detail depending to their id on the StaffShow and StaffEdit page
    // GetStaff function starts

    public function getStaff($data){
        try{
         //   $role_users = User::find($data); 
            $decodedData= json_decode($data,true); 
            $role_users = User::where('id',$decodedData['id'])->first(); 
         //  dd($role_users);
            return $this->success($role_users,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    // GetStaff function ends


    // This function contains store data logic for the staff when clicked on submit button on staffCreate page with respect to the partricular staff id
    // StoreStaff function starts

    public function storeStaff($data){ 
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
    // StoreStaff function ends

 
    // This function contains update data logic for the staff when clicked on edit button on staffIndex page according to the partricular staff id
    // UpdateStaff function starts

    public function updateStaff($data){ 
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
    // UpdateStaff function ends


    // This function will delete the staff when clicked on delete button on staffIndex page according to the partricular staff id
    // DeleteStaff function starts
   
    public function deleteStaff($data){ 
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
    // DeleteStaff function ends

}