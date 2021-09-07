<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\EmailTemplateApiController;
class EmailTemplateBackendController extends BackendController
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
        $email_api_controller = new EmailTemplateApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $email = $email_api_controller->getAllEmailTemplate($data); 
        $encodedData= json_decode($email->content(),true);               
        $encodedobject=$encodedData['data'] ;
        return view('featrures.emailTemplet.emailCrud',[
            'emails' => $encodedobject, 
            'sr' => $sr,
          ]);
        }
             
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email_type' => 'required|max:255',
            'email_subject' => 'required',
            'body' => 'required'
        ]);
        $email_api_controller = new EmailTemplateApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $email = $email_api_controller->storeEmailTemplate($data);
        $encodedData= json_decode($email->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        } 
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'email_type' => 'required|max:255',
            'email_subject' => 'required',
            'body' => 'required'
        ]);
        $email_api_controller = new EmailTemplateApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
        $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $email = $email_api_controller->updateEmailTemplate($data);
        $encodedData= json_decode($email->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
    public function destroy($id){
        $email_api_controller = new EmailTemplateApiController; 
        $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
        $email = $email_api_controller->deleteEmailTemplate($data);
        $encodedData= json_decode($email->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
}
