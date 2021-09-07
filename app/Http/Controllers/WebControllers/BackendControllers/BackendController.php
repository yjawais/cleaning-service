<?php

namespace App\Http\Controllers\WebControllers\BackendControllers;

use App\Http\Controllers\WebControllers\WebController;
use Illuminate\Http\Request;

class BackendController extends WebController
{
    public function __construct(){
      $this->middleware('auth');
       //$this->middleware('role:superadmin');
       }
}
