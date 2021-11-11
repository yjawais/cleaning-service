<?php

namespace App\Http\Controllers\ApiControllers\Features;
use App\Models\Payment;
use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;

class PaymentApiController extends ApiController
{
    /**
       * Prepare For Faq.
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
      //Payment start
      public function getAllPayment($data){
        try{
            $payDb = Payment::get(); 
            return $this->success($payDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }

    }

    public function getPayment($data){
       
        try{
               $decodedData= json_decode($data,true); 
               $payment = Payment::where('id',$decodedData['id'])->first(); 
            //  dd($payment);
               return $this->success($payment,200);
           }catch(Exception $e){
               return $this->failed('Given data is not existis.',202);
           }
    }

    public function deletePayment($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = Payment::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    //Payment ends
}
