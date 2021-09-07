<?php

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\RoleUser; 
class UserConfigrationApiController extends ApiController
{
     /**
       * Prepare For UserConfigration.
       *
       * @param mixed $request
       * @author Utkarsh Junghare 
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
      public function getAllUsers($data){ 
        try{
            $userDb = User::latest()->get();
            foreach ($userDb as $user){
              $user['role'] = RoleUser::select('role_id','is_activate')->where('user_id', $user->id)->first();
              $user['role_type'] = Role::select('name')->where('id', $user->role['role_id'])->first()['name'];
                  }
            return $this->success($userDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function getUser($data){
        try{
            $userDb = User::find($data); 
            return $this->success($userDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function storeUser($data){ 
        try{ 
             $decodedData= json_decode($data,true); 
             $user = new User();
             $user_type = $decodedData['user_type'];
             $user->fname = $decodedData['fname'];
             $user->lname = $decodedData['lname'];
             $user->email = $decodedData['email'];
             $user->password = Hash::make($decodedData['password']);
             $user->save(); 
             $user->roles()
             ->attach(Role::where('name', $user_type)->first());  
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
 
    public function updateUser($data){ 
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

    public function deleteUser($data){ 
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
}
