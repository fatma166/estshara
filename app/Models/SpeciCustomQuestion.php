<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciCustomQuestion
 * 
 * @property int $id
 * @property string $type
 * @property int $special_id
 * @property int $doctor_id
 * 
 * @property Specialization $specialization
 * @property User $user
 * @property PatientCustomAnswer $patient_custom_answer
 * @property SpeciCustomQuestionAnswer $speci_custom_question_answer
 *
 * @package App\Models
 */
class SpeciCustomQuestion extends Model
{
	protected $table = 'speci_custom_questions';
	public $timestamps = false;

	protected $casts = [
		'special_id' => 'int',
		'doctor_id' => 'int'
	];

	protected $fillable = [
		'type',
		'special_id',
		'doctor_id'
	];

	public function specialization()
	{
		return $this->belongsTo(Specialization::class, 'special_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'doctor_id');
	}

	public function patient_custom_answer()
	{
		return $this->hasOne(PatientCustomAnswer::class, 'custom_question_id');
	}
	public function speci_custom_question_answer()
	{
		return $this->hasMany(SpeciCustomQuestionAnswer::class,'question_id');
	}

	
	public function speci_custom_question_translation()
	{
		return $this->hasOne(SpeciCustomQuestionTranslaion::class, 'spaci_custom_question_id');
	}

}
