<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciCustomQuestionAnswerTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $answer_id
 * @property string $title
 * 
 *
 * @package App\Models
 */
class SpeciCustomQuestionAnswerTranslation extends Model
{
	protected $table = 'speci_custom_question_answer_translations';
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

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
