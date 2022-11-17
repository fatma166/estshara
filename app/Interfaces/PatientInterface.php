<?php 
 namespace App\Interfaces;
 
interface PatientInterface{
    
    public function editProfile($data,$user);
    public function editMidicalDetails($data,$user);
    public function editChechupDetails();
    public function editchronicDiseases();
}