<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;
use App\Http\Controllers\ApiControllers\Features\SliderApiController;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use App\Http\Controllers\WebControllers\BackendControllers\Features\UploadImageBackendController;
use Illuminate\Http\Request;
use Image;
use Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 
use App\Models\User;
class SliderBackendController extends BackendController
{
     /**
       * Prepare For Slider.
       *
       * @param mixed $request
       * @author Utkarsh Junghare 
       * Request={
       *    "title":"title",
       *    "body":"body",
       *         }
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
     
   public function index()
   {
    $sr = 0; 
    $slider_api_controller = new SliderApiController; 
    $data = json_encode(array('datakey'=>"webapplication"));       
    $slider = $slider_api_controller->getAllSlider($data); 
    $encodedData= json_decode($slider->content(),true);               
    $encodedobject=$encodedData['data'] ;
    return view('featrures.sliderForHeader.sliderList', [
      'slider_details' =>  $encodedobject,
      'sr' => $sr,
      ]);
   }

  
   public function create(){
    return view('featrures.sliderForHeader.sliderCreate');
    }

   public function store(Request $request){
    $image_controller = new UploadImageBackendController; 
    $validated = $request->validate([
      'slider_for' => 'required|max:255',
      'description' => 'required',
      // 'images' => 'image|mimes:jpeg,png,jpg,gif,svg', 
  ]);
  $slider_api_controller = new SliderApiController; 
  $data1 = json_encode($request->all());  
  $folderName="Sliders/".request('slider_for')."/";
  $images=$request->file('images');  
  $hight =600;
  $width =null;
  $slider_images = $image_controller->multipleImages($images,$folderName,$hight,$width);
  $data2 = json_encode(array('datakey'=>"webapplication",'images'=>$slider_images));
  $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
  $slider = $slider_api_controller->storeSlider($data);
  $encodedData= json_decode($slider->content(),true);     
  return redirect()->back()->with('success',$encodedData['message']);
   }
   public function show($slug){
    $slider_api_controller = new SliderApiController; 
    $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug
  ));       
    $slider = $slider_api_controller->getSliderBySlug($data); 
    $encodedData= json_decode($slider->content(),true);               
    $encodedobject=$encodedData['data'] ;
    $path = Config::get('constants.images_path.image_public_url'); 
    $final_path= $path."Sliders/".$encodedobject['slider_for']."/";

    return view('featrures.sliderForHeader.sliderShow',[
        'slider' => $encodedobject,
        'image_path' => $final_path
    ]);
    }

    public function edit($slug){
      $slider_api_controller = new SliderApiController; 
      $data = json_encode(array('datakey'=>"webapplication",'slug'=>$slug));       
      $slider = $slider_api_controller->getSliderBySlug($data); 
      $encodedData= json_decode($slider->content(),true);               
      $encodedobject=$encodedData['data'];
      $path = Config::get('constants.images_path.image_public_url'); 
      $final_path= $path."Sliders/".$encodedobject['slider_for']."/";

      return view('featrures.sliderForHeader.sliderEdit',[
          'slider' => $encodedobject,
          'image_path' => $final_path
      ]);
      }

}
