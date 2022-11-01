<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;
use App\Http\Resources\DectorDetailsResource;
use App\Http\Resources\ServiceTypeFeeResource ;
class DoctorController extends Controller
{
    /****
     * 
     * 
     * types     /all/   or /online only/  or /count online doctor     
     * 
     */
     
    public function list(Request $request,$type='all'){   
       
        $start=0;
        $end=2;
        $doctor= new DoctorRepositories;
        $doctors= $doctor->list($request,$type);
        if ($type=='countonline')
            $data=array('count'=>$doctors);
        else
            $data=array(DectorDetailsResource::collection($doctors));
      // return($data);
      //  print_r($doctors);
        return response()->json([
            'status' => 'success',
            'data' =>$data,

            ],200);
  
    }
}
