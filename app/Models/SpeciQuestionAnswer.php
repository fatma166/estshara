<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciQuestionAnswer
 * 
 * @property int $id
 * @property int $question_id
 * 
 * @property SpeciQuestion $speci_question
 * @property PatientAnswer $patient_answer
 * @property Collection|SpeciQuestionAnswerTranslation[] $speci_question_answer_translations
 *
 * @package App\Models
 */
class SpeciQuestionAnswer extends Model
{
	protected $table = 'speci_question_answers';
	public $timestamps = false;

	protected $casts = [
		'question_id' => 'int'
	];

	protected $fillable = [
		'question_id'
	];

	public function speci_question()
	{
		return $this->belongsTo(SpeciQuestion::class, 'question_id');
	}

	public function patient_answer()
	{
		return $this->hasOne(PatientAnswer::class, 'answer_id');
	}

	public function speci_question_answer_translations()
	{
		return $this->hasMany(SpeciQuestionAnswerTranslation::class, 'answer_id');
	}
}
