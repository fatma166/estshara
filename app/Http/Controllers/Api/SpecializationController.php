<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Core\HTTPResponseCodes;
use App\Repositories\SpecializationRepositry;

class SpecializationController extends Controller
{
    //
    public function lastSpcializationsConsultation($limit=2){
       
       $special=new SpecializationRepositry();
       $data= $special->lastSpcializationsConsultation($limit);
       return response()->json([
        'status' =>HTTPResponseCodes::Sucess['status'],
        'data' =>$data,
        'message'=> HTTPResponseCodes::Sucess['message'],
       

       ],HTTPResponseCodes::Sucess['code']);
    }
}
