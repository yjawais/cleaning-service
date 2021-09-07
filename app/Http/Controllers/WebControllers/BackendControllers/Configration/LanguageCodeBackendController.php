<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Configration;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Configration\LanguageCodeApiController;
class LanguageCodeBackendController extends BackendController
{
    /**
       * Prepare For LanguageCode.
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
        $language_code_api_controller = new LanguageCodeApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));
        $language = $language_code_api_controller->getAllLanguadeCode($data);
        $sr = 0;
        $encodedData= json_decode($language->content(),true);               
        $encodedobject=$encodedData['data'] ;
        return view('configration.languageCode', [
            'languages' =>  $encodedobject, 
            'sr' => $sr,
            ]);
 
    }
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $language_code_api_controller = new LanguageCodeApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $language_code = $language_code_api_controller->storeLanguadeCode($data);
        $encodedData= json_decode($language_code->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        }            
 
        public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $language_code_api_controller = new LanguageCodeApiController;
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
        $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $language_code = $language_code_api_controller->updateLanguadeCode($data);
        $encodedData= json_decode($language_code->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
    public function destroy($id){
        $language_code_api_controller = new LanguageCodeApiController;
        $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
        $language_code = $language_code_api_controller->deleteLanguadeCode($data);
        $encodedData= json_decode($language_code->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
   
}
