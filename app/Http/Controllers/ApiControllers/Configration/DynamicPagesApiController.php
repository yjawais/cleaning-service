<?php

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;

class DynamicPagesApiController extends ApiController
{
     /**
       * Prepare For Dynamic Page code.
       *
       * @param mixed $request
       * @author Utkarsh Junghare 
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
    public function getAllPages($data){ 
        try{
            $pageDb = Page::latest()->get();
            return $this->success($pageDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }
    public function getPage($data){
        try{
            $pageDb = Page::find($data);
            return $this->success($pageDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

     public function getPageBySlug($data)
    {
        try{
            $decodedData= json_decode($data,true); 
            $pageDb = Page::where('slug',$decodedData['slug'])->first(); 
            return $this->success($pageDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }       
     }

    public function storePage($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $pagesDb = new Page(); 
              $pagesDb->title =  $decodedData['page_title'];;
              $pagesDb->body = $decodedData['body']; 
              $pagesDb->meta_tag = $decodedData['meta_tag'];
              $pagesDb->meta_description =$decodedData['meta_description'];
              $pagesDb->slug = Str::slug($decodedData['page_title'], '-');
              $pagesDb->is_header = $decodedData['header_tag'];
              $pagesDb->is_footer = $decodedData['footer_tag'];
              $pagesDb->header_script = $decodedData['header_script'];
              $pagesDb->footer_script = $decodedData['footer_script'];
              $pagesDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

    public function updatePage($data){ 
        try{
             $decodedData= json_decode($data,true);
            if($decodedData['status'] === 'true'){
                 $is_activate=true;
               }
               else
                $is_activate = false;
                Page::query()->where('slug', $decodedData['slug'])->update([
                'title' => $decodedData['page_title'],
                'body' => $decodedData['body'],
                'meta_tag' => $decodedData['meta_tag'],
                'meta_description' => $decodedData['meta_description'],
                'is_header' =>$decodedData['header_tag'],
                'is_footer' => $decodedData['footer_tag'],
                'header_script' =>$decodedData['header_script'],
                'footer_script' => $decodedData['footer_script'],
                'slug' => Str::slug($decodedData['page_title'], '-'),
                'is_activate' =>$is_activate,
                 ]);     
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    } 

    public function deletePage($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = Page::where('slug',$decodedData['slug']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }

}
 