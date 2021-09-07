<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('ensureTokenIsValid')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/testApi', function (Request $request) {
    return "{
        'user':'jainesh'
    }";
});


Route::middleware('ensureTokenIsValid')->post('/post', function (Request $request) {
    return "{   
        'user':'jainesh'
    }";
});

Route::post('login', 'Auth\LoginController@login');



// Faq crud api for admin and super admin start
Route::get('/get-all-faq/{datakey}', 'ApiControllers\Configration\FaqApiController@getAllFaq');
Route::post('/add-faq', 'ApiControllers\Configration\FaqApiController@storeFaq');
Route::post('/faq/update', 'ApiControllers\Configration\FaqApiController@updateFaq');
Route::get('/faq/{id}', 'ApiControllers\Configration\FaqApiController@getFaq');
// Route::get('/faq/{id}', 'ApiControllers\Configration\FaqApiController@deleteFaq');
// Faq crud api for admin and super admin end

