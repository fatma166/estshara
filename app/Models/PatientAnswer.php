<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PatientAnswer
 * 
 * @property int $user_id
 * @property int $question_id
 * @property int|null $answer_id
 * @property string $answer_text
 * 
 * @property SpeciQuestionAnswer|null $speci_question_answer
 * @property SpeciQuestion $speci_question
 * @property User $user
 *
 * @package App\Models
 */
class PatientAnswer extends Model
{
	protected $table = 'patient_answers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'question_id' => 'int',
		'answer_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'question_id',
		'answer_id',
		'answer_text'
	];

	public function speci_question_answer()
	{
		return $this->belongsTo(SpeciQuestionAnswer::class, 'answer_id');
	}

	public function speci_question()
	{
		return $this->belongsTo(SpeciQuestion::class, 'question_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
