<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class GovernorateResource extends JsonResource
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
       return [
               'id'=>$this->id,
               'country_id'=> $this->country_id,
               'name'=>GovernorateTransRsource::collection($this->govern_trans)
       ];
    }
}
