<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
                'id'=> $this->id,
                'specialization_id'=>$this->specialization_id ,
                'name'=>$this->name,
                'locale'=>$this->locale,
                'consultation_key'=>$this->consultation_key,
                'status'=>$this->status,
                'patient_id'=>$this->patient_id,
                'doctor_id'=>$this->doctor_id,
                'service_type_id'=>$this->service_type_id,
                'date'=>$this->date,
                'end_date'=>$this->end_date,
                'service_type_id'=>$this->service_type_id,
                //'service_type_id'=>$this->,


        ];
    }
}
