<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['web','admin']],function(){
    //route for main page for admin
    Route::get('/adminpanal','AdminController@index');
     //route for show users page 
     Route::get('/adminpanal/users','UsersController@index');
      //route for add user 
       Route::get('/adminpanal/addadd','UsersController@create');
       // route for save user
         Route::post('/adminpanal/users/store','UsersController@SaveUser');
         //route for show page that edite user
           Route::get('/adminpanal/users/{id}/edite','UsersController@edite');
              //route for  edite this user user
              Route::post('/adminpanal/users/update','UsersController@UpdateUser');
              //route for delete user
                Route::get('/adminpanal/users/{id}/delete','UsersController@delete');
                //route for show settings
                Route::get('/adminpanal/showsettings','SiteSettingController@index');
                    Route::post('/adminpanal/savesettings','SiteSettingController@save');
                    
                    //route for show bulldings
                    Route::get('/adminpanal/bu','BuController@index');
                     //route for show page add bulldings
                      Route::get('/adminpanal/bu/add','BuController@add');
                     //route for save bullding
                      Route::post('/adminpanal/bu/store','BuController@store');
                    //route for show page that edite bullding
           Route::get('/adminpanal/bu/{id}/edite','BuController@edite');
           
            //route for  edite this bullding
              Route::post('/adminpanal/bu/update','BuController@UpdateBu');
               //route for delete bullding
                Route::get('/adminpanal/bu/{id}/delete','BuController@delete');
                 Route::get('/adminpanal/contact/show','Contactcontroller@index');
                   Route::get('/adminpanal/contact/{id}/edite','Contactcontroller@edite');
                    Route::get('/adminpanal/contact/{id}/delete','Contactcontroller@delete');
                     Route::post('/adminpanal/contact/update','Contactcontroller@UpdateCon');
    Route::post('/adminpanal/message/replay','Contactcontroller@SendReplay');

                     //for get bulldings for user id
                      Route::get('/adminpanal/showBu/{userid}','BuController@ShowBuForUser');
                      //for show all DisabledBu
                        Route::get('/adminpanal/showDisabledBu','BuController@showDisabledBu');
                        //this for show requests
    Route::get('/adminpanal/request/show','Requests@index');
    Route::get('/adminpanal/request/{id}/delete','Requests@delete');

                 
               
   
    
    });

   Route::group(['middleware'=>['authuser']],function(){
    Route::get('/user/add','BuController@userAdd');
     Route::post('/user/store','BuController@userStore');
      Route::get('/user/showBu','BuController@userShowBu');
      Route::get('/sendRequest/{idbu}/{iduser}','BuController@sendRequest');
       Route::get('/user/showMyRequest/{iduser}','BuController@showMyRequest');
        Route::get('/user/changeRequestStutues/{id}','BuController@changeRequestStutues');

       Route::get('ajax/req/request','BuController@showMyRequestInAjax');
    
   
     
        
       
    });
   
   
   Route::get('/showAllBu','BuController@show_all_bu_enabled');
     Route::get('/forrent','BuController@forRent');
      Route::get('/forown','BuController@forOwn');
       Route::get('/butype0','BuController@butype0');
       Route::get('/butype1','BuController@butype1');
        Route::get('/butype2','BuController@butype2');
        Route::get('/serach','BuController@search');
         Route::get('/buInfo/{id}','BuController@buInfo');
    Route::get('ajax/bu/buinformation','BuController@ajaxbuInformation');

     Route::get('/contact','BuController@contact');
      Route::post('/contact/save','Contactcontroller@save');
             
       