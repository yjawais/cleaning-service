<?php

namespace App\Http\Controllers\WebControllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsFrontendController extends FrontendController
{
    public function index()
    {
      return view('aboutus');
    }
}
