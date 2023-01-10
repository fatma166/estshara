<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::group(['middleware'=>['auth']],function($router){
    Route::namespace('Api')->prefix('auth')->group (function() {
        
        route::get('get-roles','AuthUserController@get_roles')->withoutMiddleware([auth::class,'auth_api']);
        route::get('get-countries','AuthUserController@get_countries')->withoutMiddleware([auth::class,'auth_api']);
        route::post('login','AuthUserController@login')->name('login_api')->withoutMiddleware([auth::class,'auth_api']);
        route::post('logout_','AuthUserController@logout')->name('logout_api');
        route::post('register','AuthUserController@register')->name('register')->withoutMiddleware([auth::class,'auth_api']);
        route::post('verify','AuthUserController@verify')->name('verify')->withoutMiddleware([auth::class,'auth_api']);
        
        route::post('forgetPassword','AuthUserController@forgetPassword')->name('forgetPassword')->withoutMiddleware([auth::class,'auth_api']);
        
        route::post('validatePassowrd','AuthUserController@validatePassowrd')->name('validatePassowrd')->withoutMiddleware([auth::class,'auth_api']);
        route::get('get-user-data','AuthUserController@getData')->name('getUserData');
        route::post('refresh','AuthUserController@refresh')->name('refresh_api')/*->withoutMiddleware([auth::class,'auth_api'])*/;
       
    });
    
    
    
    
   // });