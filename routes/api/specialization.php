<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('specialize')->group (function() {
        
        route::get('last-spcializations','SpecializationController@lastSpcializationsConsultation');

    });
    
    
    
    
