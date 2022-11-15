<?php 
namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PatientInterface;

class PatientRepository implements PatientInterface{

    public function editProfile($data,$user){
       // $request['avater']=
       
   
         //print_r($user); exit;
        // print_r($data); exit;
     try{
       // $user = new User;
        if($data['firstname']!='null'&&$data['lastname']!='null')
        $user->name=$data['firstname']." ".$data['lastname'];
        if($data['phone']!='null')
        $user->phone=/*$data['country_code'].*/$data['phone'];
        if($data['email']!='null')
        $user->email=$data['email'];
      //  $user->password=Hash::make($request->password);
      //  $user->birthdate=$request->birthdate;
       // $user->gender=$request->gender;
        $user->save();
        return(true);
     }catch(Exception $e){
         return(false);
     }
    }
    public function editMidicalDetails(){

    }
    public function editChechupDetails(){

    }
    public function editchronicDiseases(){


    }





}