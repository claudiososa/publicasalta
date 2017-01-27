<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(["middleware" => "auth"],function(){
  Route::get('/',[
    "uses" =>"HomeController@index",
    "as" => "inicio",
    ]);

  Route::get('ad/create',[
      'uses' => 'AdsController@create',
      'as' => 'ad_create_path',
  ]
  );

  Route::post('ad/create',[
      'uses' => 'AdsController@store',
      'as' => 'ad_store_path',
  ]
  );

  Route::get('ad/{id}',[
      'uses' => 'AdsController@show',
      'as' => 'ad_show_path'
  ])->where("id","[0-9]+");

  Route::get('ad/{id}/edit',[
      'uses' => 'AdsController@edit',
      'as' => 'ad_edit_path'
  ])->where("id","[0-9]+");

  Route::patch('ad/{id}/edit',[
      'uses' => 'AdsController@update',
      'as' => 'ad_patch_path'
  ])->where("id","[0-9]+");

  Route::delete('ad/{id}/edit',[
      'uses' => 'AdsController@destroy',
      'as' => 'ad_delete_path'
  ])->where("id","[0-9]+");


});

Route::get('auth/login',[
'uses'=>'AuthController@index',
'as' =>'auth_show_path',
]);
Route::post('auth/login',[
  'uses' => "AuthController@store",
  'as' =>"auth_store_path",
]);

Route::get('auth/logout',[
  'uses' => "AuthController@destroy",
  'as' =>"auth_destroy_path",
]);




Route::get("save_user","HomeController@saveUser");
Route::get("find_user","HomeController@find");
Route::get("edit_user","HomeController@edit");
