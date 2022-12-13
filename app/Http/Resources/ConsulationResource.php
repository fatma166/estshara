<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsulationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
      // $data=parent::toArray($request);

       return([
                'id'=>$this->id,
                'doctor_id'=>$this->doctor_id,
                'patient_id'=>$this->patient_id,
                'status'=>$this->status,
               // 'doctor_id'=>$this->doctor_id,
                'spacialization_id'=>$this->spacialization_id,
                //'service_type_id'=>$this->service_type_id,
                'date'=>$this->date,
                'end_date'=>$this->end_date,
                
       ]);
    }
}
