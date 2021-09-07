<?php

namespace App\Http\Controllers\WebControllers\BackendControllers\Configration;
use App\Http\Controllers\WebControllers\BackendControllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Configration\DynamicPagesApiController;

class DynamicPagesBackendController extends BackendController
{
  /**
       * Prepare For Pages.
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
          $d_page_api_controller = new DynamicPagesApiController; 
          $data = json_encode(array('datakey'=>"webapplication"));
          $page = $d_page_api_controller->getAllPages($data);
          $sr = 0;
          $encodedData= json_decode($page->content(),true);               
          $encodedobject=$encodedData['data'] ;
          return view('featrures.pages.index',[
            'page_details' => $encodedobject, 
            'sr' => $sr,
          ]);
   
      }

      public function show($slug)
      {
       
         $d_page_api_controller = new DynamicPagesApiController;  
          $data = json_encode(array('slug'=>$slug,'datakey'=>"webapplication"));
          $page = $d_page_api_controller->getPageBySlug($data);
          $encodedData= json_decode($page->content(),true);               
          $encodedobject=$encodedData['data'] ;
          return view('featrures.pages.show',[
            'page_detail' => $encodedobject, 
          ]);
   
      }
   
      public function store(Request $request)
      {
          $validated = $request->validate([
              'page_title' => 'required|max:255',
              'body' => 'required',
          ]);
          $d_page_api_controller = new DynamicPagesApiController; 
          $data1 = json_encode($request->all()); 
          $data2 = json_encode(array('datakey'=>"webapplication"));  
          $data =json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
          $page = $d_page_api_controller->storePage($data);
          $encodedData= json_decode($page->content(),true);     
          return redirect()->back()->with('success',$encodedData['message']);
          }            
   
          public function edit($slug)
          {
            $d_page_api_controller = new DynamicPagesApiController; 
            $data = json_encode(array('slug'=>$slug,'datakey'=>"webapplication"));
            $page = $d_page_api_controller->getPageBySlug($data);
            $encodedData= json_decode($page->content(),true);               
            $encodedobject=$encodedData['data'] ;
           return view('featrures.pages.edit',[
               'page_detail' => $encodedobject, 
             ]);
           }

           public function create()
           {
            return view('featrures.pages.create');
            }

          public function update(Request $request, $slug)
      {
        $validated = $request->validate([
            'page_title' => 'required|max:255',
            'body' => 'required',
        ]);
           $d_page_api_controller = new DynamicPagesApiController; 
          $data1 = json_encode($request->all()); 
          $data2 = json_encode(array('slug'=>$slug,'datakey'=>"webapplication")); 
          $data = json_encode(array_merge(json_decode($data1, true),json_decode($data2, true)));
          $page = $d_page_api_controller->updatePage($data);
          $encodedData= json_decode($page->content(),true);
          return redirect()->route('pages.view')->with('success',$encodedData['message']);
      }

      public function destroy($slug){
          $d_page_api_controller = new DynamicPagesApiController; 
          $data = json_encode(array('slug'=>$slug,'datakey'=>"webapplication"));
          $page = $d_page_api_controller->deletePage($data);
          $encodedData= json_decode($page->content(),true);
          return redirect()->back()->with('success',$encodedData['message']);
      }
}
