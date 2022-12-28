<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::namespace('Api')->prefix('specialize')->middleware(['auth_api'])->group (function() {
        
        route::get('last-spcializations/{limit?}','SpecializationController@lastSpcializationsConsultation');
        route::get('get-specification-question','SpecializationController@get_specification_question');
        route::post('add-patient-answer','SpecializationController@add_patient_answers');



    });
       
    
    
    
