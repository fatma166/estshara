<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ConsulationResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\ServiceTypeFeeResource;
use App\Http\Resources\SpecializationTranslationResource;
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
        if (isset($this->specialization_translations[0]['name'])){
        return[
                'id'=> $this->id,
                'img'=>$this->img,
                'code'=>$this->code,
                'name_locale'=>  SpecializationTranslationResource::collection($this->specialization_translations),
               // 'locale'=>new SpecializationTranslationResource($this->specialization_translations->locale),
                'fees'=> ServiceTypeFeeResource::collection($this->consulations),
                'doctor_data'=> new UserResource($this->consulations[0]['user']),
                'consulations'=>ConsulationResource::collection($this->consulations),
                
                


        ];
    }else{
            return[   
                'id'=> $this->id,
                'img'=>$this->img,
                'code'=>$this->code,
                'locale'=>$this->locale,
               'name'=>$this->name
            ];

    }
    }
}
