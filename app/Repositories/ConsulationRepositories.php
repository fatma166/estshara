<?php 
namespace App\Repositories;
use App\Interfaces\ConsulationInterface;
use App\Models\Consulation;
use App\Models\Consaltaion_service;
use App\Models\PaymentMethod;
use App\Models\Specialization;
use Illuminate\Http\Response;

use App\Http\Resources\ConsulationResource;
use App\Http\Resources\SpecializationResource;
use App\Http\Resources\ServiceTypeFeeResource;
use App\Http\Resources\PaymentOrderResource;
use App\Http\Resources\PaymentMethodTransalationResource;
use App\Http\Resources\ConsaltationDetailsResource;
use App\Http\Resources\ChatConsaltationResource;

class ConsulationRepositories implements ConsulationInterface{

    public function list_consultation($status,$start,$end,$id){
        $sortDirection ='asc'; 
       /* $result=Consulation::with(['user' => function ($query) use ($sortDirection) { 
                                     
                                            //$query->with(['user']);
                                            $query->with('service_type.service_type_fees');
                                            $query->orderBy('id', $sortDirection);
                                      }
                                      ,'specialization.specialization_translations'])->where(function($query1) use($status){
                                        if($status!='all')
                                        $query1->where('status',$status);
                                      })->limit($end)->get()->sortByDesc('consulations.created_at')->toArray();
   print_r($result);exit;*/
   $result=Specialization::with(['consulations' => function ($query) use ($sortDirection,$status,$id) { 
      if($status!='all')
         $query->where('status',$status);
      if($id!=null)
          $query->where('id',$id);
          $query->with(['user']);
          $query->with('service_type.service_type_fees');
          $query->orderBy('id', $sortDirection);
}
,'specialization_translations'])->offset($start)->limit($end)->get()->sortByDesc('consulations.created_at');//->toArray();
 //print_r($result);exit;
 
        return SpecializationResource::collection($result);
      
        return($result);

    }

    public function cancle_consultation($id){
            $exist=Consulation::where('status','wait')->where('id',$id)->first();
           
            if(empty($exist)){
              return false;
            }
           
            try{
              Consulation::where('id',$id)->update(['status'=>'cancle']);
               
              
            }catch(Exception $e){
              return false;
            }
            return true;
    }
    public function get_invoice($id){
	
          $invoice=Consulation::with(['payment_consulation.payment_log.payment_method' => function ($query) use ($id) {
          
               // $query;
                  }])->find($id);
                 // print_r($invoice); exit;
          $payment_consulation=$invoice->payment_consulation;
          $service_type= $invoice->service_type;
          $service_type_fees=$service_type->service_type_fees->first();
          $payment_log=$payment_consulation->payment_log;
          $payment_order=$payment_log->payment_order;
          $payment_method= $payment_log->payment_method->first();
          $payment_method_transalations=$payment_method->payment_method_transalations;
         // print_r($mm);exit;

                return(['service_type_fees'=>json_decode(json_encode(new ServiceTypeFeeResource($service_type_fees))),'payment_order'=>json_decode(json_encode(new PaymentOrderResource($payment_order))),'payment_method_transalations'=>json_decode(json_encode(new  PaymentMethodTransalationResource($payment_method_transalations)))]);

           
             

    }
    public function details_consultation($id){
	
        $data=Consaltaion_service::with(['services'/*=>function($query) use($id){

      
                  $query;

          }*/])->where('consulation_id',$id)->get();
          return( ConsaltationDetailsResource::collection($data));

       
    }
    public function chat_consultation($id,$type){
        $data=Consulation::with(['chats'=>function($query) use($type,$id){
                          $query->where('consalt_id',$id)->where('type','note');
                          $query->with('chat_from')->with('chat_to');
                          }])->get();
      
      // $from=$data->with('chats.chat_from')->get(); 
    //  $to=$data->with('chats.chat_to')->get();
        return(ChatConsaltationResource::collection($data));
    }
    public function send_message($data){
        
    }
}
