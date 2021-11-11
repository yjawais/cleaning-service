<?php

namespace App\Http\Controllers\WebControllers\FrontendControllers;

use App\Http\Controllers\WebControllers\FrontendControllers\FrontendController;

use Illuminate\Http\Request;
 
use App\Models\ContactUs; 
use App\Models\EnquiryNow;

class LandingFrontendController extends FrontendController
{
     /**
       * Prepare For landing controller without auth part.
       *
       * @param mixed $request
       * @author Utkarsh Junghare       
       */
      public function index()
      {
        return view('welcome');
   
      }

      public function contactUs(Request $request) {
        try {
        $contactus = new ContactUs();
        // if($slug == 'contact-us'){
          $name = request('name');
          $message = request('message');
          $contactus->message = $message;
        // }
        // if($slug == 'touch-with-us'){
        //   $name = request('name');
           $cname = request('company_name');
           $contactus->company_name = $cname;
        // }
    
        $contact = request('contact');
        $emailid = request('emailid');
        $contactus->name = $name;
        $contactus->contact = $contact;
        $contactus->email = $emailid;
        $contactus->save(); 
    
        // $detail = [
        //     'title'=>'Contact Us',
        //     'name'=>'Name    :- '.$fname.' '.$lname,
        //     'contact'=>'Contact :- '.$contact,
        //     'email'=>'Email   :- '.$emailid,
        //     'msg'=>'Message :-' .$message
        //   ];
        // Mail::to('ichssystemnagpur@gmail.com')->send(new \App\Mail\MailtrapContactUs($detail));
        return redirect()->back()->with('success', 'Send Successfully!');
    } catch (Exception $e) {
        return redirect()->back()->with('msg', 'There were some problems with your input.');
      }
    }
    
    public function enquiryNow(Request $request) {
      try {
       $enqurynowDb = new EnquiryNow();
    
       $name = request('fname_enqury')." ".request('lname_enqury');
       $contact = request('contact_number_enqury');
       $emailid = request('email_id_enqury');
        $message = request('msg_enqury');
        if(!empty($request->input('enquiry_products'))){
          $products = implode(', ', $request->input('enquiry_products'));
          $enqurynowDb->enquiry_products = $products;
        }
        $enqurynowDb->name = $name;
        $enqurynowDb->contact = $contact;
        $enqurynowDb->email = $emailid;
        $enqurynowDb->enquiry_msg = $message;
        $enqurynowDb->save();
        
        // 
        // 
        // 
        // $contactus->save(); 
        // $input = $request->all();
        // $input['enquiry_products'] = implode(', ', $request->input('enquiry_products'));
        // EnquiryNow::create($input);
    
      return redirect()->back()->with('success', 'Send Successfully!');
    } catch (Exception $e) {
      return redirect()->back()->with('msg', 'There were some problems with your input.');
    }
    }
    }
    

    