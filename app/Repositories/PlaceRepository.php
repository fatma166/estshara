<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\PlaceInterface;
use Illuminate\Http\Response;
use App\Models\Governorate;
use App\Models\City;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\GovernorateResource;
use App\Http\Resources\CityResource;

class PlaceRepository implements PlaceInterface{

    public function getGovernment($request){
        $data=Governorate::with('govern_trans')->get();
        $data=GovernorateResource::collection($data);
        return($data);
    }


    public function getCity($govern_id){
        $data=City::with('city_trans')->get();
        $data=CityResource::collection($data);
        return($data);
    }
    

}