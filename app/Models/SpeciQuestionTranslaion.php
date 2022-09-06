<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciQuestionTranslaion
 * 
 * @property int $id
 * @property int $locale
 * @property int $spaci_question_id
 * @property string $title
 * 
 * @property SpeciQuestion $speci_question
 *
 * @package App\Models
 */
class SpeciQuestionTranslaion extends Model
{
	protected $table = 'speci_question_translaions';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'spaci_question_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'spaci_question_id',
		'title'
	];

	public function speci_question()
	{
		return $this->belongsTo(SpeciQuestion::class, 'spaci_question_id');
	}
}
