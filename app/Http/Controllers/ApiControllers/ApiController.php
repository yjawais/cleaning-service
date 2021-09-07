<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\MasterController;
use Illuminate\Http\Request;

class ApiController extends MasterController
{
    public function failed($messge , $status){
        return response()->json(['message'=>$messge], $status); 
}

public function successMessage($messge , $status){
    return response()->json(['message'=>$messge], $status); 
}

public function success($data , $status){
        return response()->json(['data'=>$data], $status); 
}
}
