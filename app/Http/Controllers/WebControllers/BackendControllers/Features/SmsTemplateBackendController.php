<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;
use App\Http\Controllers\ApiControllers\Features\SmsTemplateApiController;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;

class SmsTemplateBackendController extends BackendController
{
    /**
       * Prepare For Faq. 
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
      public function index(){
        $sr = 0; 
        $sms_api_controller = new SmsTemplateApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $sms = $sms_api_controller->getAllSmsTemplate($data); 
        $encodedData= json_decode($sms->content(),true);               
        $encodedobject=$encodedData['data'] ;
        return view('featrures.smsTemplet.smsCrud',[
            'smses' => $encodedobject, 
            'sr' => $sr,
          ]);
        }
             
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sms_type' => 'required|max:255',
            'body' => 'required'
        ]);
        $sms_api_controller = new SmsTemplateApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $sms = $sms_api_controller->storeSmsTemplate($data);
        $encodedData= json_decode($sms->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        } 
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'sms_type' => 'required|max:255',
            'body' => 'required'
        ]);
        $sms_api_controller = new SmsTemplateApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
        $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $sms = $sms_api_controller->updateSmsTemplate($data);
        $encodedData= json_decode($sms->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
    public function destroy($id){
        $sms_api_controller = new SmsTemplateApiController; 
        $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
        $sms = $sms_api_controller->deleteSmsTemplate($data);
        $encodedData= json_decode($sms->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
}
