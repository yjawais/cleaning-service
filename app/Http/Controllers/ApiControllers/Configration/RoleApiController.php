<?php

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Role;
class RoleApiController extends ApiController
{
    /**
       * Prepare For Role.
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
      public function getAllRole($data){ 
        try{
            $roleDb = Role::latest()->get();
            return $this->success($roleDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    public function getRole($data){
        try{
            $roleDb = Role::find($data); 
            return $this->success($roleDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getAllActiveRole($data){ 
        try{
            $roleDb = Role::where('is_activate',true)->latest()->get();
            return $this->success($roleDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function storeRole($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $role = new Role();  
            $role->name = $decodedData['name'];
            $role->description = $decodedData['description'];
            $role->route_path = $decodedData['route_path'];
            $role->slug = Str::slug($decodedData['name'], '-');
            $role->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
 
    public function updateRole($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                Role::query()->where('id', $decodedData['id'])->update([
                'name' => $decodedData['name'],
                'description' => $decodedData['description'],
                'route_path'  => $decodedData['route_path'],
                'slug' => Str::slug($decodedData['name'], '-'),
                'is_activate' =>$is_activate,
                 ]);       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    } 

    public function deleteRole($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = Role::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

}

