<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciQuestionAnswerTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $answer_id
 * @property string $title
 * 
 * @property SpeciQuestionAnswer $speci_question_answer
 *
 * @package App\Models
 */
class SpeciQuestionAnswerTranslation extends Model
{
	protected $table = 'speci_question_answer_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'answer_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'answer_id',
		'title'
	];

	/*public function speci_question_answer()
	{
		return $this->belongsTo(SpeciQuestionAnswer::class, 'answer_id');
	}*/

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
