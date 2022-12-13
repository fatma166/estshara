<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;
use App\Http\Requests\Api\ReportDoctorRequest;
use App\Http\requests\Api\DoctorDetailsRequest;
use App\Http\Resources\DectorDetailsResource;
use App\Http\Resources\ServiceTypeFeeResource ;
use App\Modules\Core\HTTPResponseCodes;
class DoctorController extends Controller
{
    /****
     * 
     * 
     * types     /all/   or /online only/  or /count online doctor     
     * 
     */
     
    public function list(Request $request,$type='all'){   
       
        $start=0;
        $end=2;
        $doctor= new DoctorRepositories;
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
        print_r($doctor); exit;
    }
}
