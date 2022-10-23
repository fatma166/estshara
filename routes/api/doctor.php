<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::namespace('Api')->prefix('doctor')->middleware('auth_api')->group (function() {

    route::get('list','DoctorController@list');

});