<?php 
 namespace App\Interfaces;
 
interface PatientInterface{
    
    public function editProfile($data,$user);
    public function editMidicalDetails();
    public function editChechupDetails();
    public function editchronicDiseases();
}