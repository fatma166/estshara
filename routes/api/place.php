<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->prefix('place')->group (function() {
    route::get('get-government/{id?}','PlaceController@getGovernment')->name('getGovernment')->withoutMiddleware([auth::class,'auth_api']);
    
    route::get('get-city/{id?}','PlaceController@getCity')->name('getCity')->withoutMiddleware([auth::class,'auth_api']);

});



