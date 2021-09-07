<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Configration;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Configration\RoleApiController;

class RoleBackendController extends BackendController
{
    /**
       * Prepare For Role.
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
          $role_api_controller = new RoleApiController; 
          $data = json_encode(array('datakey'=>"webapplication"));
          $role = $role_api_controller->getAllRole($data);
  
          $encodedData= json_decode($role->content(),true);               
          $encodedobject=$encodedData['data'] ;
           return view('configration.roleType', [
               'roles' =>  $encodedobject,
               'sr' => $sr,
               ]);

   }

   public function store(Request $request)
   {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'route_path' => 'required',
    ]);
    $role_api_controller = new RoleApiController; 
    $data1 = json_encode($request->all()); 
    $data2 = json_encode(array('datakey'=>"webapplication"));  
    $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
    $role = $role_api_controller->storeRole($data);
    $encodedData= json_decode($role->content(),true);     
    return redirect()->back()->with('success',$encodedData['message']);
   }

   public function update(Request $request, $id)
   {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'route_path' => 'required',
    ]);
    $role_api_controller = new RoleApiController;
    $data1 = json_encode($request->all()); 
    $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
    $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
    $role = $role_api_controller->updateRole($data);
    $encodedData= json_decode($role->content(),true);
    return redirect()->back()->with('success',$encodedData['message']);
   }

   public function destroy($id)
   {
    $role_api_controller = new RoleApiController;
    $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
    $role = $role_api_controller->deleteRole($data);
    $encodedData= json_decode($role->content(),true);
    return redirect()->back()->with('success',$encodedData['message']);
   }
}

