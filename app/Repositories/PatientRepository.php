<?php 
namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use App\Models\Patient_detail;
use App\Models\Patient_scan;
use App\Models\PatientDrugs;
use App\Models\Patient_scan_attach;
use App\Models\GeneticDisease;
use App\Models\Patient_ch_disease;
use App\Models\PatientGeneticDiseases;
use App\Models\PatientSurgeries;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PatientInterface;
use App\Http\Traits\UploadAttachTrait;


class PatientRepository implements PatientInterface{

    use UploadAttachTrait;
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
            $patient=new Patient_detail;
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
    public function editCheckupDetails($request,$user){
   
        $patient=new Patient_scan;
        $data=$request->all();
        try{ 
//print_r($data->all()); exit;
              if(isset($data['name']))
                    $patient->name=$data['name'];
              if(isset($data['date']))     
                     $patient->date=$data['date'];
                     $patient->user_id=$user->id;
                     $patient->save();
                    // print_r($patient_scan); exit;
              if(isset($data['attach'])){
                     $images=$this->upload($data['attach'],'patient_attach');
                      foreach($images as $image)
                      {
                          $attach=new Patient_scan_attach;
                          $attach->P_scan_id=$patient->id;
                          $attach->path='"'.$image.'"';
                          $attach->save();

                      }
              }
              
              return(true);
            
        }catch(Exception $e){       
              return(false);
        }
    }
    public function editchronicDiseases($request,$user){


      $patient=new Patient_ch_disease;
      $data=$request->all();
      try{ 
//print_r($data->all()); exit;
            if(isset($data['name']))
                  $patient->name=$data['name'];
            if(isset($data['known_date']))     
                   $patient->known_date=$data['known_date'];
            
            if(isset($data['notes']))     
                   $patient->notes=$data['notes'];
                   $patient->user_id=$user->id;
                   $patient->save();
                  // print_r($patient_scan); exit;
        
            
            return(true);
          
      }catch(Exception $e){       
            return(false);
      }
    }


    public function editdrags($request,$user){


      $patient=new PatientDrugs;
      $data=$request->all();
      try{ 
//print_r($data->all()); exit;
            if(isset($data['name']))
                  $patient->name=$data['name'];
            
            if(isset($data['start_date']))
                  $patient->start_date=$data['start_date'];
            if(isset($data['known_date']))     
                   $patient->known_date=$data['known_date'];
            
            if(isset($data['notes']))     
                   $patient->notes=$data['notes'];
                   $patient->user_id=$user->id;
                   $patient->save();
                  // print_r($patient_scan); exit;
        
            
            return(true);
          
      }catch(Exception $e){       
            return(false);
      }
    }

    public function editPatientGeneticDiseases($request,$user){


      $patient=new PatientGeneticDiseases;
      $data=$request->all();
      try{ 
            //print_r($data->all()); exit;
            if(isset($data['relation']))
                  $patient->name=$data['relation'];
            
            if(isset($data['diseases_name']))
                  $patient->diseases_name=$data['diseases_name'];
                   $patient->user_id=$user->id;
                   $patient->save();
                  // print_r($patient_scan); exit;
        
            
            return(true);
          
      }catch(Exception $e){       
            return(false);
      }
    }
    

    public function patient_surgeries($request,$user){

      $patient=new PatientSurgeries;
      $data=$request->all();
      try{ 
            //print_r($data->all()); exit;
            if(isset($data['name']))
                  $patient->name=$data['name'];
            
            if(isset($data['date']))
                  $patient->date=$data['date'];
                  $patient->save();
                  // print_r($patient_scan); exit;
            return(true);
          
      }catch(Exception $e){       
            return(false);
      }
    }


}