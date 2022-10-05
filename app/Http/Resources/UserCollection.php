<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
           [    'id' => $this->id,
             //  'role_id' => RoleResource::collection($this->role_id),
                'name' => $this->name,
                'email' => $this->email,
                'phone'=>$this->phone,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
           ];
      //  return parent::toArray($request);
    }
}