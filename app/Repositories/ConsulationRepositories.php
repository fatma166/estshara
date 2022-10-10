<?php 
namespace App\Repositories;
use App\Interfaces\ConsulationInterface;
use App\Models\Consulation;
use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\ConsulationResource;

class ConsulationRepositories implements ConsulationInterface{

    public function list_consultation($status,$start,$end,$id){
        $sortDirection ='asc'; 
        $result=Consulation::with(['user' => function ($query) use ($sortDirection) { 
                                     
                                            //$query->with(['user']);
                                            $query->with('service_type.service_type_fees');
                                            $query->orderBy('id', $sortDirection);
                                      }
                                      ,'specialization.specialization_translations'])->where(function($query1) use($status){
                                        if($status!='all')
                                        $query1->where('status',$status);
                                      })->limit($end)->get()->sortByDesc('consulations.created_at')->toArray();
   print_r($result);exit;
 
        return ConsulationResource::collection($result);
      
        return($result);

    }


}
