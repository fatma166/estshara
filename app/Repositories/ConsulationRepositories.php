<?php 
namespace App\Repositories;
use App\Interfaces\ConsulationInterface;
use App\Models\Consulation;
use App\Models\Specialization;
use Illuminate\Http\Response;

use App\Http\Resources\ConsulationResource;
use App\Http\Resources\SpecializationResource;

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
      $invoice=Consulation::with(['payment_consulation.payment_log' => function ($query) use ($id) {
       
            // $query->with('payment_method_transalations');
              }])->find($id);
        $method1=$invoice->payment_method;
        print_r($method1); exit;
       $method2= $method1->payment_method_transalations->toArray();
             
$invoice=$invoice->payment_method_transalations;
      print_r($invoice); exit;
    }
}
