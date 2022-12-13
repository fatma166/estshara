<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('consulation')->middleware(['auth_api'])->group (function() {
        
        route::get('list/{status?}/{start?}/{end?}/{id?}','ConsulationController@list_Consultation');
        
        route::get('cancle/{id}','ConsulationController@cancle_consultation');
        route::get('invoice/{id}','ConsulationController@get_invoice');
        route::get('details/{id}','ConsulationController@details_consultation');
        route::get('chats/{id}/{type?}','ConsulationController@chat_consultation');
        route::post('send-message','ConsulationController@send_message');
        route::get('get-note','ConsulationController@consulate_note');
        route::get('get-consulat-drags','ConsulationController@consulat_drags');
    });
       
    
    
    
