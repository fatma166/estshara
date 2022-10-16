<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsaltationDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
      return([
        'consulation_id'=>$this->consulation_id,
        'id'=>$this->services->id,
        'code'=>$this->services->code,
        'category_id'=>$this->services->category_id,
        'provider_id'=>$this->services->provider_id,
        'price'=>$this->services->price,
        'discount'=>$this->services->discount,
        'status'=>$this->services->status,
        'img'=>$this->services->img,
        'end_date'=>$this->services->end_date
]);
    }
}
