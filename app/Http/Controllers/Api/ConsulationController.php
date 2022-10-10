<?php

namespace App\Http\Controllers\Api;
use  App\Repositories\ConsulationRepositories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsulationController extends Controller
{
    //

    public function list_consultation($status='all',$start=0,$end=5,$id=null){
       
        $consaltation=new ConsulationRepositories();
        $data= $consaltation->list_consultation($status,$start,$end,$id);
        return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>$data,
         'message'=> HTTPResponseCodes::Sucess['message'],
        
 
        ],HTTPResponseCodes::Sucess['code']);
     }
}
