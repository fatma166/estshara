<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\SpecializationInterface;
use App\Models\Specialization;
use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\SpecializationResource;
class SpecializationRepositry implements SpecializationInterface{

    public function lastSpcializationsConsultation($limit){
        $result=Specialization::with('consulations','specialization_translations','user')->limit($limit)/*->orderBy('')*/->get();
        
 
        return SpecializationResource::collection($result);
      
        return($result);

    }


}
