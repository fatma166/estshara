<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('consulation')->middleware(['auth_api'])->group (function() {
        
        route::get('list/{status?}/{start?}/{end?}/{id?}','ConsulationController@list_Consultation');
        

    });
       
    
    
    
