<?php

Route::namespace('Api')->middleware('auth_api')->prefix('patient')->group(function(){
    route::post('edit-profile','PatientController@editProfile');
    route::post('edit-MidicalDetails','PatientController@editMidicalDetails');
    route::post('edit-CheckupDetails','PatientController@editCheckupDetails');
    route::post('edit-chronicDiseases','PatientController@editchronicDiseases');
    route::post('edit-editdrags','PatientController@editdrags');
    route::post('edit-genaticdiseases','PatientController@patientGeneticDiseases');
    route::post('edit-patient_surgeries','PatientController@patient_surgeries');

});
?>