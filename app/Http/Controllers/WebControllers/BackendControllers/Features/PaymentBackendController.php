<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\WebControllers\BackendControllers\Features;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Features\PaymentApiController;

class PaymentBackendController extends BackendController
{
     /**
       * Prepare For Faq.
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
//Payment start
public function index(){
    $sr = 0; 
    $payment_api_controller = new PaymentApiController; 
    $data = json_encode(array('datakey'=>"webapplication"));       
    $payment = $payment_api_controller->getAllPayment($data); 
    $encodedData= json_decode($payment->content(),true);               
    $encodedobject=$encodedData['data'] ;
    //dd($encodedobject);
        return view('featrures.payment.paymentIndex',[ 
            'payment_details' => $encodedobject,
            'sr' => $sr,
        ]);        
}

public function create(){
  return view('featrures.payment.paymentCreate');

}

public function show($id){
  $payment_api_controller = new PaymentApiController; 
  $data = json_encode(array('datakey'=>"webapplication",'id'=>$id));       
  $payment = $payment_api_controller->getPayment($data); 
  $encodedData= json_decode($payment->content(),true);               
  $encodedobject=$encodedData['data'] ;
  // dd($encodedobject);
  return view('featrures.payment.paymentShow',[
      'payment' => $encodedobject,
  ]);
  }

  public function destroy($id){
    $payment_api_controller = new PaymentApiController; 
    $data = json_encode(array('id'=>$id,'datakey'=>"webapplication"));
    $payment = $payment_api_controller->deletePayment($data);
    $encodedData= json_decode($payment->content(),true);
    return redirect()->back()->with('success',$encodedData['message']);
}
}
//Payment end