<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;
use App\Http\Resources\DectorDetailsResource;
use App\Http\Resources\ServiceTypeFeeResource ;
class DoctorController extends Controller
{
     
    public function list(Request $request){
       
        $start=0;
        $end=2;
        $doctor= new DoctorRepositories;
        $doctors= $doctor->list($request);

        $data=array(DectorDetailsResource::collection($doctors));
       return($data);
      //  print_r($doctors);
    }
}
