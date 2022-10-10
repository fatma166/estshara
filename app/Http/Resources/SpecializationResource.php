<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ConsulationResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\ServiceTypeFeeResource;
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
                'img'=>$this->img,
                'code'=>$this->code,
                'name'=>$this->specialization_translations[0]['name'],
                'service_fees'=> new ServiceTypeFeeResource($this->consulations[0]['service_type']['service_type_fees'][0]),
                'doctor_data'=> new UserResource($this->consulations[0]['user']),
                'consulations'=>ConsulationResource::collection($this->consulations),
                
                


        ];
    }
}
