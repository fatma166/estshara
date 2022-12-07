<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::namespace('Api')->prefix('doctor')->middleware('auth_api')->group (function() {

    route::get('list/{type?}','DoctorController@list');
    route::post('report-doctor','DoctorController@reportDoctor');
});