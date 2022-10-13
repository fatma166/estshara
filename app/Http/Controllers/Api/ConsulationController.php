<?php

namespace App\Http\Controllers\Api;
use  App\Repositories\ConsulationRepositories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Core\HTTPResponseCodes;
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
     public function cancle_consultation($id){

        $consaltation=new ConsulationRepositories();
        $data=$consaltation->cancle_consultation($id);
        if($data==false){

            return response()->json([
                'status' =>HTTPResponseCodes:: BadRequest['status'],
                'data' =>[],
                'message'=> HTTPResponseCodes:: BadRequest['message'],
               
        
               ],HTTPResponseCodes:: BadRequest['code']);


        }
        return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>$data,
         'message'=> HTTPResponseCodes::Sucess['message'],
        
 
        ],HTTPResponseCodes::Sucess['code']);
     }
     public function get_invoice($id){
       
        $consaltation=new ConsulationRepositories();
        $data=$consaltation->get_invoice($id);
        
        return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>$data,
         'message'=> HTTPResponseCodes::Sucess['message'],
        
 
        ],HTTPResponseCodes::Sucess['code']);
     }
     function details_consultation($id){
      
          $consaltation=new ConsulationRepositories();
          $data=$consaltation->details_consultation($id);
          return response()->json([
            'status' =>HTTPResponseCodes::Sucess['status'],
            'data' =>$data,
            'message'=> HTTPResponseCodes::Sucess['message'],
           
    
           ],HTTPResponseCodes::Sucess['code']);
     }
}
