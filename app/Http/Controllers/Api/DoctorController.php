<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DoctorRepositories;
use App\Http\Requests\Api\ReportDoctorRequest;
use App\Http\requests\Api\DoctorDetailsRequest;
use App\Http\requests\Api\FavDoctorRequest;
use App\Http\Resources\DectorDetailsResource;
use App\Http\Resources\ServiceTypeFeeResource ;
use App\Modules\Core\HTTPResponseCodes;
class DoctorController extends Controller
{
    /****
     * 
     * 
     * types     /all/ or /fav/   or /online only/  or /count online doctor     
     * 
     */
     
    public function list(Request $request,$type='all'){   
       
        $start=0;
        $end=2;
        $doctor= new DoctorRepositories;
        if($type=="fav"){
            $user_data=Auth::guard('api')->user();
            $favs=$doctor->getFav($user_data->id);
            //print_r($favs); exit;
            $fav_array=array();
            foreach($favs as $fav){
               array_push ($fav_array, $fav['doctor_id']);
            }
            
            $request['fav_doctors']=$fav_array;
        }
        $doctors= $doctor->list($request,$type);
        if ($type=='countonline')
            $data=array('count'=>$doctors);
     
        else
            $data=DectorDetailsResource::collection($doctors);
      // return($data);
      //  print_r($doctors);
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' =>$data,

            ], HTTPResponseCodes::Sucess['code']);
  
    }
    /**
     * REPORT DOCTOR
     * @REQUEST VALADITED $REQUEST
     * @RETURN 
     */
    public function reportDoctor(ReportDoctorRequest $request){
        $user=auth('api')->user()->id;
        $doctor=new DoctorRepositories;
        $reportStatus=$doctor->reportDoctor($request,$user);
        if($reportStatus){
            return response()->json([
                'status' => HTTPResponseCodes::Sucess['status'],
                'data' =>$doctor,
                ], HTTPResponseCodes::Sucess['code']);

        }else{
            return response()->json([
                'status' => HTTPResponseCodes::BadRequest['status'],
                'data' =>$data,
    
                ], HTTPResponseCodes::BadRequest['code']); 
        }
    }
     /**
      * 

      */
     public function doctor_details(DoctorDetailsRequest $request){
        $doctor=new DoctorRepositories;
        $doctor=$doctor->doctor_details($request);
        $data=new DectorDetailsResource($doctor);
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' =>$data,

            ], HTTPResponseCodes::Sucess['code']);
  
     //  print_r($doctor); exit;
    }

    public function doctor_appoint($request){

        $doctor=new DoctorRepositories;
        $doctor=$doctor->doctor_appoint($request);
        $data=new DectorDetailsResource($doctor);
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' =>$data,

            ], HTTPResponseCodes::Sucess['code']);
  
    
    }

    
    public function add_fav_Doctor(FavDoctorRequest $request){
        $user=auth('api')->user()->id;
         $request['patient_id']=$user->id;
        $doctor=new DoctorRepositories;
        
        $data=$doctor->add_fav_Doctor($request);
        
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' =>$data,

            ], HTTPResponseCodes::Sucess['code']);
  
     
    
    }
    public function remove_fav_Doctor(FavDoctorRequest $request){
        $request['patient_id']=$user->id;

        $doctor=new DoctorRepositories;
        $data=$doctor->remove_fav_Doctor($request);
        
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' =>$data,

            ], HTTPResponseCodes::Sucess['code']);
  
    
    }
}
