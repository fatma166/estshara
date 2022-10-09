<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('specialize')->middleware(['auth_api'])->group (function() {
        
        route::get('last-spcializations/{limit?}','SpecializationController@lastSpcializationsConsultation');

    });
       
    
    
    
