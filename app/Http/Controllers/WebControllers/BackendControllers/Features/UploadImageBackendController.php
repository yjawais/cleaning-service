<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Features;

use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class UploadImageBackendController extends BackendController
{
    // public function uploadImage(Request $request) {
  //   $this->validate($request, [
  //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
  //   ]);

  //   $this->storeImage($request);
  // } 
   /**
       * Prepares a image for storing.
       *
       * @param mixed $request
       * @author Utkarsh Junghare
       
       */
      public function multipleImages($request,$folderName,$hight,$width) {
        $array = array();
      $i=1;
      $j=0;
      foreach($request as $file){          
        // Get file from request
        // $file = $request->file('image');  
        // Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();  
        // Get file path
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  
        // // Remove unwanted characters
         $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
         $filename = preg_replace("/\s+/", '-', $filename);  
        // // Get the original image extension
         $extension = $file->getClientOriginalExtension();   
        // // Create unique file name
        // $fileNameToStore = $filename.'_'.time().'.'.$extension;
         $fileNameToStore = $i.'_'.time().'.'.$extension;
         $resize = Image::make($file)->resize($hight, $width, function ($constraint) {
          $constraint->aspectRatio();
          })->encode('jpg');
         //print_r($fileNameToStore);
         $a = 
          array('image' =>  $fileNameToStore ,'order' => $i);

//          $myObj=[];
//          $myObj->image = $fileNameToStore;
// $myObj->order = $i;
$i++;
         array_push($array,json_encode($a));
        // // Refer image to method resizeImage
        $save = $this->resizeImage($file, $folderName, $fileNameToStore, $resize);
      }
        //return $filename.fileNameToStore;
       // return '{'.implode(",",$array).'}';
       return json_encode($array);
      }
  
      /**
       * Prepares a image for storing.
       *
       * @param mixed $request
       * @author Utkarsh Junghare
       * @return String-filepath
       */
      public function storeImage($file,$folderName,$hight,$width) {
        // Get file from request
        //$file = $request->file('image');
        $resize = Image::make($file)->resize($hight, $width, function ($constraint) {
          $constraint->aspectRatio();
          })->encode('jpg');
  
        // Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();
  
        // Get file path
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
  
        // Remove unwanted characters
        $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
        $filename = preg_replace("/\s+/", '-', $filename);
  
        // Get the original image extension
        $extension = $file->getClientOriginalExtension();
  
        // Create unique file name
        $fileNameToStore = 'thumbnail_'.'_'.time().'.'.$extension;
  
        // Refer image to method resizeImage
        $save = $this->resizeImage($file,$folderName, $fileNameToStore,$resize);
  
        return $fileNameToStore;
      }
      
      /**
       * Resizes a image using the InterventionImage package.
       *
       * @param object $file
       * @param string $fileNameToStore
       * @author Utkarsh Junghare
       * @return bool
       */
      public function resizeImage($file, $folderName,$fileNameToStore,$resize) {
        // Resize image
        // $resize = Image::make($file)->resize(600, null, function ($constraint) {
        //   $constraint->aspectRatio();
        // })->encode('jpg');
  
        // Create hash value
        $hash = md5($resize->__toString());
  
        // Prepare qualified image name
        $image = $hash."jpg";
  
        // Put image to storage
        $save = Storage::put("public/images/{$folderName}/{$fileNameToStore}", $resize->__toString());
  //echo $save;
        if($save) {
           return true;
         }
         return false;
       }

}
