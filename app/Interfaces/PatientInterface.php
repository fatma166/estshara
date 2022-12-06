<?php 
 namespace App\Interfaces;
 
interface PatientInterface{
    
    public function editProfile($data,$user);
    public function editMidicalDetails($data,$user);
    public function editCheckupDetails($data,$user);
    public function editchronicDiseases($data,$user);
    public function editdrags($data,$user);
    public function editPatientGeneticDiseases($request,$user);
    public function patient_surgeries($data,$user);
   
}