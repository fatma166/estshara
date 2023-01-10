<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::namespace('Api')->prefix('doctor')->middleware('auth_api')->group (function() {

    route::get('list/{type?}','DoctorController@list');
    route::post('report-doctor','DoctorController@reportDoctor');
    route::get('doctor-details','DoctorController@doctor_details');
    route::post('add-fav-Doctor','DoctorController@add_fav_Doctor');
   // route::post('get-doctor-appoint','DoctorController@doctor_appoint');

    route::post('remove-fav-Doctor','DoctorController@remove_fav_Doctor');



});