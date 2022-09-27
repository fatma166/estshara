<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::group(['middleware'=>['auth']],function($router){
    Route::namespace('Api')->group (function() {
        
        route::get('get-roles','AuthUserController@get_roles')->withoutMiddleware([auth::class]);
        route::get('get-countries/{locale?}/{id?}','AuthUserController@get_countries')->withoutMiddleware([auth::class]);
        route::post('login','AuthUserController@login')->name('login')->withoutMiddleware([auth::class]);
        route::post('register','AuthUserController@register')->name('register')->withoutMiddleware([auth::class]);
        
        
    });
    
    
    
    
   // });