<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class IntroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

       // return(['ff'=>"jkjk"]);
       
               // return parent::toArray($request);
       return [
        'id' => $this->id,
        'img' => $this->img,
        'title' => $this->title,
        //'description' => $this->description,
        
       ];
    }
}
