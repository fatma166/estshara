<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CountryTransalationResource;
class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return parent::toArray($request);
       $country_trans= $this->country_translations;
       print_r($country_trans['locale']);exit;
        return[
              'id'=>$this->id,
              'locale'=>$country_trans->locale,
              'name'=>(new CountryTransalationResource($this->country_translations))->name,
              'img'=>(new CountryTransalationResource($this->country_translations))->img,


        ];
    }
}
