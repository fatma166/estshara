<?php

Route::namespace('Api')->middleware('auth_api')->prefix('patient')->group(function(){
    route::post('edit-profile','PatientController@editProfile');
});
?>