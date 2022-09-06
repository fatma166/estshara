<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciQuestion
 * 
 * @property int $id
 * @property float $fee
 * @property string $type
 * @property int $special_id
 * 
 * @property Specialization $specialization
 * @property PatientAnswer $patient_answer
 * @property PatientCustomAnswer $patient_custom_answer
 * @property Collection|SpeciQuestionAnswer[] $speci_question_answers
 * @property Collection|SpeciQuestionTranslaion[] $speci_question_translaions
 *
 * @package App\Models
 */
class SpeciQuestion extends Model
{
	protected $table = 'speci_questions';
	public $timestamps = false;

	protected $casts = [
		'fee' => 'float',
		'special_id' => 'int'
	];

	protected $fillable = [
		'fee',
		'type',
		'special_id'
	];

	public function specialization()
	{
		return $this->belongsTo(Specialization::class, 'special_id');
	}

	public function patient_answer()
	{
		return $this->hasOne(PatientAnswer::class, 'question_id');
	}

	public function patient_custom_answer()
	{
		return $this->hasOne(PatientCustomAnswer::class, 'custom_answer_id');
	}

	public function speci_question_answers()
	{
		return $this->hasMany(SpeciQuestionAnswer::class, 'question_id');
	}

	public function speci_question_translaions()
	{
		return $this->hasMany(SpeciQuestionTranslaion::class, 'spaci_question_id');
	}
}
