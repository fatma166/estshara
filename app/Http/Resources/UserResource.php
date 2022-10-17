<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
       return
       [    'id' => $this->id,
         //  'role_id' => RoleResource::collection($this->role_id),
            'name' => $this->name,
            'avatar' => $this->avatar,
            'email' => $this->email,
            'phone'=>$this->phone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
       ];
    }
}
