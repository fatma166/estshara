<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SpeciQuestionTransalationResource;
use App\Http\Resources\SpeciQuestionAnswerTransalationResource;

class SpeciQuestionResource extends JsonResource
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
if(isset($this->speci_custom_question_translation))
        return[
              'id'=>$this->id,
              'type'=>$this->type,
              'special_id'=>$this->special_id,
              'doctor_id'=>$this->doctor_id,
              'question_title_locale'=>new SpeciQuestionTransalationResource($this->speci_custom_question_translation),
             // 'answer_title_locale'=>SpeciQuestionAnswerTransalationResource::collection($this->speci_custom_question_answer),
              'answer_title_locale'=>SpeciQuestionAnswerResource::collection($this->speci_custom_question_answer),
               'type'=>'custom'            
            ];
        return[
            'id'=>$this->id,
            'type'=>$this->type,
            'special_id'=>$this->special_id,
            'doctor_id'=>$this->doctor_id,
            'question_title_locale'=>new SpeciQuestionTransalationResource($this->speci_question_translaions),
            'answer_title_locale'=> SpeciQuestionAnswerResource::collection($this->speci_question_answers),
            'type'=>'spacialize'            
            
        ];

    }
}
