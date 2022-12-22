<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorDetailsTransaltionResource extends JsonResource
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
            return['locale'=>$this->locale,
            'work_experiance'=>$this->work_exeperinace,
            'work_details'=>$this->work_details,
            'university'=>$this->university,
            'collage'=>$this->collage];
    }
}
