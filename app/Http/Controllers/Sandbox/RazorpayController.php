<?php
namespace App\Http\Controllers\Sandbox;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Razorpay\Api\Api;
use Session;
use Redirect;

class RazorpayController extends Controller
{

//https://razorpay.com/docs/payment-gateway/test-card-upi-details/
//     Mastercard

// 5104 0600 0000 0008

// Random CVV

// Any future date

// Visa

// 4111 1111 1111 1111

// Random CVV

// Any future date
    
    public function razorpay()
    {        
        return view('sandbox.razorpayPayment');
    }

    public function payment(Request $request)
    {        
        $input = $request->all();        
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}
