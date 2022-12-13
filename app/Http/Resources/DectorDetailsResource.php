<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ServiceTypeFeeResource ;
use App\Http\Resources\SpecializationResource;
use App\Http\Resources\CommentResource;
use App\Modules\Core\Helper;
class DectorDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       // print_r(parent::toArray($request)); exit;
  // return parent::toArray($request);
   // if(count(ServiceTypeFeeResource::collection($this->doctor_detail->doctor_provider->services)))
     // {
       return[
              'id'=>$this->id,
              'role_id'=>$this->role_id,
              'name'=>$this->name,
              'last_name'=>$this->last_name,

              'email'=>$this->email,

              'city_id'=>$this->city_id,
              'gender'=>$this->gender,
              'avatar'=>$this->avatar,
              'instractions'=>$this->doctor_detail->instractions,
              'prices'=>$this->doctor_detail->prices,
              //'fees'=>ServiceTypeFeeResource::collection($this->doctor_detail->doctor_provider->services),
             // 'specialize'=>SpecializationResource::collection($this->doctor_detail->specialization->specialization_translations),
              'rate'=>Helper::rateFormmating($this->doctor_detail->comments_doctor),





       ];
   // }else{
    //    return[];
   // }
    }
}
