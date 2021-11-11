<?php

namespace App\Http\Controllers\WebControllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyFrontendController extends FrontendController
{
    public function index()
    {
      return view('privacypolicy');
    }
}
