<?php 
 namespace App\Interfaces;
 
interface PatientInterface{
    
    public function editProfile($data,$user);
    public function editMidicalDetails($data,$user);
    public function editCheckupDetails($data,$user);
    public function editchronicDiseases();
}