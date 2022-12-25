<?php 
namespace App\Interfaces;

interface DoctorInterface
{
 public function list($request,$type);
 public function reportDoctor($request,$user);
 public function doctor_details($request);
 //public function doctor_appoint($request);
 public function getFav($user_id);
 public function add_fav_Doctor($request);
 public function remove_fav_Doctor($request);

}