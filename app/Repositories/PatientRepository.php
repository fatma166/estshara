<?php 
namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PatientInterface;

class PatientRepository implements PatientInterface{

    public function editProfile($request,$user){
       // $request['avater']=
       
   
      //   print_r($user); 
    //  print_r($request->all()); exit;
        
     try{
       // $user = new User;

        if(isset($request['firstname']))
             $user->name=$request['firstname'];
        if(isset($request['lastname']))     
         $user->last_name=$request['lastname'];
        if(isset($request['phone'])||isset($request['country_code']))
        $user->phone=$request['country_code'].$request['phone'];

        if(isset($request['email']))
        $user->email=$request['email'];
        if(isset($request['firstname']))
        $user->password=Hash::make($request['password)']);
        if(isset($request['birthdate']))
        $user->birthdate=$request['birthdate'];
        if(isset($request['gender']))
        $user->gender=$request['gender'];
        $user->save();
        
        return(true);
     }catch(Exception $e){
        
         return(false);
     }
    }
    public function editMidicalDetails($data,$user){
            $user=$user->patient_details;
        try{ 
              if(isset($request['weight']))
                    $user->weight=$request['weight'];
              if(isset($request['height']))     
                    $user->height=$request['height'];
              if(isset($request['hr']))
                    $user->hr=$request['hr'];
              if(isset($request['smoking']))
                    $user->smoking=$request['smoking'];
              if(isset($request['alchole']))
                    $user->alchole=$request['alchole'];
              if(isset($request['birthdate']))
                    $user->birthdate=$request['birthdate'];
              if(isset($request['Marital_status']))
                    $user->Marital_status=$request['Marital_status'];
              $user->save();
              
              return(true);
        }catch(Exception $e){       
              return(false);
        }
    }
    public function editChechupDetails(){

    }
    public function editchronicDiseases(){


    }





}