<?php 
namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use App\Models\Patient_detail;
use App\Models\Patient_scan;
use App\Models\Patient_scan_attach;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PatientInterface;
use App\Traits\UploadAttachTrait;

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
            $patient=new Patient_scan;
        try{ 
              if(isset($request['weight']))
                   $patient->weight=$request['weight'];
              if(isset($request['height']))     
              $patient->height=$request['height'];
              if(isset($request['hr']))
              $patient->hr=$request['hr'];
              if(isset($request['smoking']))
              $patient->smoking=$request['smoking'];
              if(isset($request['alchole']))
              $patient->alchole=$request['alchole'];
              if(isset($request['birthdate']))
              $patient->birthdate=$request['birthdate'];
              if(isset($request['Marital_status']))
              $patient->Marital_status=$request['Marital_status'];
              $patient->user_id=$user;
              $user->save();
              
              return(true);
        }catch(Exception $e){       
              return(false);
        }
    }
    public function editCheckupDetails($data,$user){
      //  print_r($data->all()); exit;
        $patient=new Patient_scan;
        try{ 
              if(isset($request['name']))
                   $patient->name=$request['name'];
              if(isset($request['date']))     
              $patient->date=$request['date'];
              $patient->user_id=$user;
              $patient_scan= $user->save();
              if(isset($request['attach'])){
               $images=$this->upload($request['attach']);
                 foreach($images as $image){
                {
                    $attach=new Patient_scan_attach;
                    $attach->P_scan_id=$patient_scan->id;
                    $attach->path=$image;
                    $attach->save();

                 }
              }
              
             
              
              return(true);
            }
        }catch(Exception $e){       
              return(false);
        }
    }
    public function editchronicDiseases(){


    }





}