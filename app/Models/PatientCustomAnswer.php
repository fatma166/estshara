<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PatientCustomAnswer
 * 
 * @property int $user_id
 * @property int $custom_question_id
 * @property int|null $custom_answer_id
 * @property string $answer_text
 * 
 * @property SpeciQuestion|null $speci_question
 * @property SpeciCustomQuestion $speci_custom_question
 * @property User $user
 *
 * @package App\Models
 */
class PatientCustomAnswer extends Model
{
	protected $table = 'patient_custom_answers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'custom_question_id' => 'int',
		'custom_answer_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'custom_question_id',
		'custom_answer_id',
		'answer_text'
	];

	public function speci_question()
	{
		return $this->belongsTo(SpeciQuestion::class, 'custom_answer_id');
	}

	public function speci_custom_question()
	{
		return $this->belongsTo(SpeciCustomQuestion::class, 'custom_question_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
