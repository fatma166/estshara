<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class IntroCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
       if(empty($request->all()))
        return [];

       return [
            'id' => $this->id,
            'title' => $this->title,
            'img' => $this->img,
            'description' => $this->description,
            
        ];
       // return parent::toArray($request);
    }
}
