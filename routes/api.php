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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group(['middleware'=>['api','checkpassword']],function(){
        Route::post('/getAllBuldings','ApiController@index');
         
          Route::post('/login','ApiController@login');
           Route::post('/register','ApiController@register');
            Route::post('/logout','ApiController@logout');
             Route::post('/user_profile','ApiController@user_profile');
        
        
        });
Route::group(['middleware'=>['api','checkpassword','apicheckUserAuth:user-api']],function(){
          Route::post('/changeStutues','ApiController@changeStutues');
        
        
        
        
        });