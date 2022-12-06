<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceTypeFeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
    // return parent::toArray($request);
   $ff= parent::toArray($request);
    //print_r($ff); exit;  
      if(isset($ff['service_type']['service_type_fees'])){
      $fee_data=$ff['service_type']['service_type_fees'];
       //return($fee_data);
      }else{
        $fee_data=$this;
      }
        //print_r($fee_data); exit;  
       return[

              'fee'=>$fee_data->fee,
               'service_type_id'=>$fee_data->service_type_id


       ]; 
    }
}
