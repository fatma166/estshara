<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciCustomQuestionAnswer
 * 
 * @property int $id
 * @property int $question_id
 * 
 * @property SpeciCustomQuestion $speci_custom_question
 *
 * @package App\Models
 */
class SpeciCustomQuestionAnswer extends Model
{
	protected $table = 'speci_custom_question_answer';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'question_id' => 'int'
	];

	protected $fillable = [
		'id',
		'question_id'
	];

	public function speci_custom_question()
	{
		return $this->belongsTo(SpeciCustomQuestion::class, 'question_id');
	}
	
	
	public function speci_custom_answer_translation()
	{
		return $this->hasOne(SpeciCustomQuestionAnswerTranslation::class,'answer_id');
	}
}
