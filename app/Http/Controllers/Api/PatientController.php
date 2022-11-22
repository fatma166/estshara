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
}
