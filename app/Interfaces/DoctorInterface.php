<?php 
namespace App\Interfaces;

interface DoctorInterface
{
 public function list($request,$type);
 public function reportDoctor($request,$user);
 public function doctor_details($request);
}