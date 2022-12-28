<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\SpecializationInterface;
use App\Models\Specialization;
use App\Models\SpeciCustomQuestion;
use App\Models\SpeciQuestion;
use App\Models\PatientCustomAnswer;
use App\Models\PatientAnswer;



use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\SpecializationResource;
use App\Http\Resources\SpeciQuestionResource;

class SpecializationRepositry implements SpecializationInterface{

    public function lastSpcializationsConsultation($limit){
        $sortDirection ='asc'; 
        $result=Specialization::with(['consulations' => function ($query) use ($sortDirection) { 
                                            $query->with(['user']);
                                            $query->with('service_type.service_type_fees');
                                            $query->orderBy('id', $sortDirection);
                                      }
                                      ,'specialization_translations'])->limit($limit)->get()->sortByDesc('consulations.created_at');//->toArray();
   // print_r($result);exit;
 
        return SpecializationResource::collection($result);
      
        return($result);

    }
     

    public function get_specification_question($request){
        
        $chec_exist=SpeciCustomQuestion::where('doctor_id',$request['doctor_id'])->get()->toArray();
        
        if(!empty($chec_exist)){
	
            $result= SpeciCustomQuestion::where('doctor_id',$request['doctor_id'])->with(['speci_custom_question_translation','speci_custom_question_answer'=>function($query) use($request){$query->with('speci_custom_answer_translation');}])->offset($request['start'])->limit($request['end'])->get();
             
            return SpeciQuestionResource::collection($result);
             
        }
        

        $result= SpeciQuestion::where('special_id',$request['special_id'])->with(['speci_question_translaions','speci_question_answers'=>function($query) use($request){$query->with('speci_question_answer_translations');}])->offset($request['start'])->limit($request['end'])->get();

        return SpeciQuestionResource::collection($result);
  
        
    }

    public function add_patient_answers($request){

          $request=$request->all();
        if($request['type']=='custom'){
            $answer=new PatientAnswer;
            $answer->user_id=$request['user_id'];
            if(isset($request['answer_id']))
            $answer->answer_id=$request['answer_id'];
            $answer->question_id=$request['question_id'];
            if(isset($request['answer_text']))
            $answer->answer_text=$request['answer_text'];
            $answer->save();
           
           
            return true;

        }

        $answer=new PatientCustomAnswer;
        $answer->user_id=$request['user_id'];
        if(isset($request['answer_id']))
        $answer->answer_id=$request['answer_id'];
        $answer->question_id=$request['question_id'];
        if(isset($request['answer_text']))
        $answer->answer_text=$request['answer_text'];
        $answer->save();
        return true;
    }

}