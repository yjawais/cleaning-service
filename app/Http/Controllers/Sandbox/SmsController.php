<?php
namespace App\Http\Controllers\Sandbox;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;


class SmsController extends Controller
{
    //

    public function sendSms($phoneNumber , $msg){
        //   $Phno='9730618684';
          // $Msg="Your Text Msg";
           // $Password='emwg2693EM';
           // $SenderID='INFSMS';
           // $UserID='kaliba';
           //$url='http://nimbusit.biz/api/SmsApi/SendBulkApi';
   
           $url=Config::get('app.smsURL');
           $SenderID=Config::get('app.smsSenderID');
           $UserID=Config::get('app.smsUserName');
           $Password=Config::get('app.smsPassword');
   
           
   
   
           $params = array(
               "Phno" => $phoneNumber,
               "Msg" => urlencode($msg),
               "Password" => $Password,
               "SenderID"=>$SenderID,
               "UserID"=>$UserID
            );
   
           $postData = '';
           foreach($params as $k => $v) 
           { 
             $postData .= $k . '='.$v.'&'; 
           }
           $postData = rtrim($postData, '&');
        
   
   
           print_r($postData);
           $ch = curl_init();
           curl_setopt($ch,CURLOPT_URL,$url);
           curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
           curl_setopt($ch,CURLOPT_HEADER, false); 
           //curl_setopt($ch, CURLOPT_POST, count($postData));
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
   
           $output=curl_exec($ch);
   
           curl_close($ch);
           return $output;
       }
}
