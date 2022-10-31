<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ServiceTypeFeeResource ;
use App\Http\Resources\SpecializationResource;
class DectorDetailsResource extends JsonResource
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
       return[
              'id'=>$this->id,
              'role_id'=>$this->role_id,
              'name'=>$this->name,
              'last_name'=>$this->last_name,

              'email'=>$this->email,

              'city_id'=>$this->city_id,

              'avatar'=>$this->avatar,
              'fees'=>ServiceTypeFeeResource::collection($this->doctor_detail->doctor_provider->services),
              'specialize'=>SpecializationResource::collection($this->doctor_detail->specialization->specialization_translations)
             // 'rate'=>



       ];
    }
}
