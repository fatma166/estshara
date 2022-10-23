<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;
use App\Http\Resources\DectorDetailsResource;
class DoctorController extends Controller
{
     
    public function list(Request $request){
       
        $start=0;
        $end=2;
        $doctor= new DoctorRepositories;
        $doctors= $doctor->list($request);
       return(DectorDetailsResource::collection($doctors));
      //  print_r($doctors);
    }
}
