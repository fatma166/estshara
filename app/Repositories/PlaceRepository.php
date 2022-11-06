<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\PlaceInterface;
use Illuminate\Http\Response;
use App\Models\Governorate;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\GovernorateResource;
class PlaceRepository implements PlaceInterface{

    public function getGovernment($request){
        $data=Governorate::with('govern_trans')->get();
        $data=GovernorateResource::collection($data);
        return($data);
    }


    public function getCity($govern_id){

    }
    

}