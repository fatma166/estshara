<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>['auth']],function($router){
    Route::namespace('Api')->group (function() {
        
        route::get('get-roles','AuthUserController@get_roles')->withoutMiddleware([auth::class]);;
      
        route::post('login','AuthUserController@login')->name('login')->withoutMiddleware([auth::class]);
        route::post('register','AuthUserController@register')->name('register')->withoutMiddleware([auth::class]);
    
        Route::group(['prefix' => 'leaverequests'], function () {
            Route::POST('/request', "LeaveRequestController@Request")->name('leave-store');
    
            Route::get('/{id?}', "LeaveRequestController@Index")->name('leave-index');
            Route::post('requestAction', "LeaveRequestController@requestAction")->name('leave-update');
    
        });
    
        Route::group(['prefix' => 'notification'], function () {
            Route::get('index/{id?}', "NotificationController@index")->name('notify-index');
            Route::post('change_status', "NotificationController@change_status")->name('notify-update');
        });
    });
    
    
    
    
    });