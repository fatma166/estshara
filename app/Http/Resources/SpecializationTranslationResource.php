<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationTranslationResource extends JsonResource
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
    $data=parent::toArray($request);
//print_r($data); exit;
       return[
        'name'=>$data['name'],
        'locale'=>$data['locale']['locale_code'],
        'locale_name'=>$data['locale']['locale_translations'][0]['name']
       ];
    }
}
