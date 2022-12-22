<?php

namespace App\Http\Resources;
use App\Modules\Core\Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointResource extends JsonResource
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

        Helper::appointFormmating($this->appointment),
    ];
    }
}
