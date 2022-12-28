<?php

namespace App\Http\Resources;
use App\Http\Resources\SpeciQuestionAnswerTransalationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class speciQuestionAnswerResource extends JsonResource
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
       if(isset($this->speci_question_answer_translations))
       return  new SpeciQuestionAnswerTransalationResource($this->speci_question_answer_translations);
       
       return new SpeciQuestionAnswerTransalationResource($this->speci_custom_answer_translation);

    }
}
