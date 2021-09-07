<?php

namespace App\Http\Controllers\Sandbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class TestingController extends Controller
{
    public function ecomerce(){
        return view('sandbox.e-comerce');
      }

      public function demo(){
        return view('sandbox.demo');
      }

      public function itratingData($slug){
        $productDetailLocal = Product::where('slug',$slug)->where('is_delete',false)->first(); 
        return view('sandbox.arrayIteration',[
          'product'=>$productDetailLocal,
        ]); 
      }
}
