<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Core\HTTPResponseCodes;
use App\Repositories\SpecializationRepositry;
use App\Http\requests\Api\SpecificationQuestionRequest;
use App\Http\requests\Api\PatientAnswerRequest;
use Illuminate\Support\Facades\Auth;

class SpecializationController extends Controller
{
    //
    public function lastSpcializationsConsultation($limit=2){
       
       $special=new SpecializationRepositry();
       $data= $special->lastSpcializationsConsultation($limit);
       return response()->json([
        'status' =>HTTPResponseCodes::Sucess['status'],
        'data' =>$data,
        'message'=> HTTPResponseCodes::Sucess['message'],
       

       ],HTTPResponseCodes::Sucess['code']);
    }

    public function get_specification_question(SpecificationQuestionRequest $request){
      
        $special=new SpecializationRepositry();
        $data=$special->get_specification_question($request);
        return response()->json([
            'status' =>HTTPResponseCodes::Sucess['status'],
            'data' =>$data,
            'message'=> HTTPResponseCodes::Sucess['message'],
           
    
           ],HTTPResponseCodes::Sucess['code']);

           
        

    }

    public function add_patient_answers(PatientAnswerRequest $request){
        
        $user_data= Auth::guard('api')->user();
        $request['user_id']=$user_data->id;
        $special=new SpecializationRepositry();
        $data=$special->add_patient_answers($request);
        return response()->json([
                                    'status' =>HTTPResponseCodes::Sucess['status'],
                                    'data' =>$data,
                                    'message'=> HTTPResponseCodes::Sucess['message'],
                                ],HTTPResponseCodes::Sucess['code']);

        
    }

}
