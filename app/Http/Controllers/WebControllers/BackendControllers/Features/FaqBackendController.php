<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\FaqApiController;
class FaqBackendController extends BackendController
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
        $faq_api_controller = new FaqApiController; 
        $data = json_encode(array('datakey'=>"webapplication"));       
        $faq = $faq_api_controller->getAllFaq($data); 
        $encodedData= json_decode($faq->content(),true);               
        $encodedobject=$encodedData['data'] ;
            return view('featrures.faqs.faqCrud',[ 
                'faqs' => $encodedobject,
                'sr' => $sr,
            ]);
             
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'type' => 'required'
        ]);
        $faq_api_controller = new FaqApiController; 
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('datakey'=>"webapplication"));  
        $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $faq = $faq_api_controller->storeFaq($data);
        $encodedData= json_decode($faq->content(),true);     
        return redirect()->back()->with('success',$encodedData['message']);
        } 
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'type' => 'required'
        ]);
        $faq_api_controller = new FaqApiController;
        $data1 = json_encode($request->all()); 
        $data2 = json_encode(array('id'=>$id,'datakey'=>"webapplication")); 
        $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
        $faq = $faq_api_controller->updateFaq($data);
        $encodedData= json_decode($faq->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
    public function destroy($id){
        $faq_api_controller = new FaqApiController;
        $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
        $faq = $faq_api_controller->deleteFaq($data);
        $encodedData= json_decode($faq->content(),true);
        return redirect()->back()->with('success',$encodedData['message']);
    }
}
