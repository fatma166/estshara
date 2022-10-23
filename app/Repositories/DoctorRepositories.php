<?php 
namespace App\Repositories;
use App\Interfaces\DoctorInterface;
use App\Models\User;
class DoctorRepositories implements DoctorInterface{
   public function list($request){
    $data=$request->user()->doctor_details();
    print_r($data); exit;
        $data=User::with(['doctor_detail'=>function($query) use($request){
                     $query->with('specialization')->addSelect('specialization_id');
                    }])->get();
        return($data);
    
   }

}