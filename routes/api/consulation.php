<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('consulation')->middleware(['auth_api'])->group (function() {
        
        route::get('list/{status?}/{start?}/{end?}/{id?}','ConsulationController@list_Consultation');
        
        route::get('cancle/{id}','ConsulationController@cancle_consultation');
        route::get('invoice/{id}','ConsulationController@get_invoice');
        route::get('details/{id}','ConsulationController@details_consultation');
    });
       
    
    
    
