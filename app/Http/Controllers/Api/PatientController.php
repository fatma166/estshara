<?php
/**
 * @author fatmaGhareeb
 * @copyright 2022
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PatientRepository;
use App\Http\Requests\Api\PatientRequest;
use App\Http\Requests\Api\MidicalDetailsRequest;
use App\Http\Requests\Api\CheckupDetailsRequest;
use App\Http\Requests\Api\ChronicDiseasesRequest;
use App\Http\Requests\Api\DragsRequest;
use App\Http\Requests\Api\GeneticDiseasesRequest;
use App\Http\Requests\Api\SurgeriesRequest;

use App\Modules\Core\HTTPResponseCodes;
class PatientController extends Controller
{
    //
    public function editProfile(PatientRequest $request){
        
       $success_code=HTTPResponseCodes::Sucess;
       $profile=new PatientRepository();
       $user= $request->user();
        $profile= $profile->editProfile($request,$user);
       if($profile==true){
            return response()->json([
                'status' => HTTPResponseCodes::Sucess["status"],
                'data' =>$profile,
                'message' => HTTPResponseCodes::Sucess["message"]
                ],200);
 
        }else{
           /* return new Response(
                [
                    "exception" => get_class($error),
                    "errors" => $error->getMessage()
                ],
                HTTPResponseCodes::BadRequest["code"]
            ); */
            return response()->json([
                'status'=>false,
                'data'=>$profile,
                'message' => HTTPResponseCodes::BadRequest["message"]
            ], HTTPResponseCodes::BadRequest["code"]);
        }
    }

    public function editMidicalDetails(MidicalDetailsRequest $request){

        $profile=new PatientRepository();
        $user= $request->user();
        $profile= $profile->editMidicalDetails($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
       }else{
            /* return new Response(
                 [
                     "exception" => get_class($error),
                     "errors" => $error->getMessage()
                 ],
                 HTTPResponseCodes::BadRequest["code"]
             ); */
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
         }
 
    }
    public function editCheckupDetails(CheckupDetailsRequest $request){
        $profile=new PatientRepository();
        $user= $request->user();
        $profile= $profile->editCheckupDetails($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
       }else{
            /* return new Response(
                 [
                     "exception" => get_class($error),
                     "errors" => $error->getMessage()
                 ],
                 HTTPResponseCodes::BadRequest["code"]
             ); */
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
         }
    }
    public function editchronicDiseases(ChronicDiseasesRequest $request){
        $profile=new PatientRepository();
        $user= $request->user();
        $profile= $profile->editchronicDiseases($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
       }else{
            /* return new Response(
                 [
                     "exception" => get_class($error),
                     "errors" => $error->getMessage()
                 ],
                 HTTPResponseCodes::BadRequest["code"]
             ); */
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
         } 
    }
    public function editdrags(DragsRequest $request){
        
        $profile=new PatientRepository();

        $user= $request->user();
        $profile= $profile->editdrags($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
       }else{
            /* return new Response(
                 [
                     "exception" => get_class($error),
                     "errors" => $error->getMessage()
                 ],
                 HTTPResponseCodes::BadRequest["code"]
             ); */
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
         } 
    }

    
    public function patientGeneticDiseases(GeneticDiseasesRequest $request){

        $profile=new PatientRepository();
        $user= $request->user();

        $profile= $profile->editPatientGeneticDiseases($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
        }else{
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
         } 
    }

    public function patient_surgeries(SurgeriesRequest $request){

        $profile=new PatientRepository();
        $user= $request->user();
    
        $profile= $profile->patient_surgeries($request,$user);
        if($profile==true){
             return response()->json([
                 'status' => HTTPResponseCodes::Sucess["status"],
                 'data' =>$profile,
                 'message' => HTTPResponseCodes::Sucess["message"]
                 ],200);
  
        }else{
             return response()->json([
                 'status'=>false,
                 'data'=>$profile,
                 'message' => HTTPResponseCodes::BadRequest["message"]
             ], HTTPResponseCodes::BadRequest["code"]);
        } 
    }


    

}
