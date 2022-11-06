<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PlaceRepository;
class PlaceController extends Controller
{
    
    //
    public function getGovernment(Request $request){
      $place=new PlaceRepository;
      $data=$place->getGovernment($request);
      return response()->json([
        'status' => 'success',
        'data' =>$data,

        ],200);
      
    }

    public function getCity($government_id){
        
    }
}
