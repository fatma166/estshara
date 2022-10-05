<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::group(['middleware'=>['auth']],function($router){
    Route::namespace('Api')->prefix('auth')->group (function() {
        
        route::get('get-roles','AuthUserController@get_roles')->withoutMiddleware([auth::class]);
        route::get('get-countries/{locale?}/{id?}','AuthUserController@get_countries')->withoutMiddleware([auth::class]);
        route::post('login','AuthUserController@login')->name('login')->withoutMiddleware([auth::class]);
        route::post('register','AuthUserController@register')->name('register')->withoutMiddleware([auth::class]);
        route::post('verify','AuthUserController@verify')->name('verify')->withoutMiddleware([auth::class]);
        
        route::post('forgetPassword','AuthUserController@forgetPassword')->name('forgetPassword')->withoutMiddleware([auth::class]);
        
        route::post('validatePassowrd','AuthUserController@validatePassowrd')->name('validatePassowrd')->withoutMiddleware([auth::class]);
        route::get('get-user-data','AuthUserController@getData')->name('getUserData');
    });
    
    
    
    
   // });