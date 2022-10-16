<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChatConsaltationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
        return([
            $this->id=>$this->chats,
/*'id'=>$this->chats->id,
            'message'=>$this->chats->message,
            'from_id'=>$this->chats->from_id,
            'to_id'=>$this->chats->to_id,
            'type'=>$this->chats->type,
            'consalt_id'=>$this->chats->consalt_id,
            'status'=>$this->chats->status,*/
            
    ]);
    }
}
