<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\SpecializationInterface;
use App\Models\Specialization;
use App\Models\SpeciCustomQuestion;
use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\SpecializationResource;
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
        
        $chec_exist=SpeciCustomQuestion::where('doctor_id',$request['doctor_id'])->first();

        if(!empty($chec_exist)){
             $result= SpeciCustomQuestion::where('doctor_id',$request['doctor_id'])->with('speci_custom_question_translation')->offset($request['start'])->limit($request['end'])->get();
             print_r($result); exit;  
        }
}
