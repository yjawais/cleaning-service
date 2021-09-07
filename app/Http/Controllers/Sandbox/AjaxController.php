<?php

namespace App\Http\Controllers\Sandbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    public function index() {
      
      
        
        return view('sandbox.ajax');
    }

    public function getRequest() {
      

    sleep(10); 
        $data = "This is get Call";
        
        return $data;
    }

    public function getPostDataFromServe(Request $request) {

    sleep(10); 
        $input = $request->all();        

        $data = "This is Post Call - with data : " . $input['key'];
        
        return $data;
    }

    

    

}
