<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;
use App\Models\SocialSetting;
use Illuminate\Support\Str; 


class SocialSettingApiController extends ApiController
{
   /**
       * Prepare For Faq.
       *
       * @param mixed $request
       * @author Anjali Gaikwad
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

      public function getAllSocialSetting($data){
        try{
            $social_settingDb = SocialSetting::get(); 
            return $this->success($social_settingDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
    }

    public function storeSocialSetting($data){ 
        try{
             $decodedData= json_decode($data,true); 
             $social_settingDb = new SocialSetting();   
             $social_settingDb->provider = $decodedData['provider'];
            $social_settingDb->description = $decodedData['description']; 
          //  $social_settingDb->icon = $decodedData['icon']; 
            $social_settingDb->redirect_link = $decodedData['redirect_link']; 
            $social_settingDb->client_id = $decodedData['client_id']; 
            $social_settingDb->client_secret = $decodedData['client_secret']; 
         //   $social_settingDb->slug = Str::slug($decodedData['title'], '-'); 
        //  $sliderDb->created_by = $this->user()->id;
           $social_settingDb->save(); 
             return $this->successMessage('Added Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }     
    }

    public function getSocialSetting($data){
        try{
            $decodedData= json_decode($data,true); 
            $social_settingDb = SocialSetting::where('id',$decodedData['id'])->first(); 
            // dd($social_settingDb);
            return $this->success($social_settingDb,200);
        }catch(Exception $e){
            return $this->failed('Given data is not existis.',202);
        }
       
    }

    // public function getSocialSetting($data){
    //     try{
    //         $decodedData= json_decode($data,true); 
    //         $social_settingDb = SocialSetting::select('id')->where('slug',$decodedData['slug'])->first()['id']; 
    //         // dd($social_settingDb);
    //         return $this->success($social_settingDb,200);
    //     }catch(Exception $e){
    //         return $this->failed('Given data is not existis.',202);
    //     }
       
    // }

    public function updateSocialSetting($data){ 
        try{
             $decodedData= json_decode($data,true);
             SocialSetting::query()->where('id', $decodedData['id'])->update([
                'provider' => $decodedData['provider'],
                'description' => $decodedData['description'],
           //     'icon' => $decodedData['icon'],
                'redirect_link' => $decodedData['redirect_link'],
                'client_id' => $decodedData['client_id'],
                'client_secret' => $decodedData['client_secret'],
               // 'slug' => Str::slug($decodedData['title'], '-'),
                 ]);
       
              return $this->successMessage('Updated Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
    }

    public function deleteSocialSetting($data){ 
        try{
             $decodedData= json_decode($data,true);
             $model = SocialSetting::find($decodedData['id']);
             $model->delete();       
              return $this->successMessage('Deleted Successfully.',200);
        }catch(Exception $e){
            return $this->failed('Given table is not existis.',202);
        }
       
    }
    //social settings ends ,addon starts

}
