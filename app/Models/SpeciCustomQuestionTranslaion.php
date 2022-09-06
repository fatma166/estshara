<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeciCustomQuestionTranslaion
 * 
 * @property int $id
 * @property int $locale
 * @property int $spaci_custom_question_id
 * @property string $title
 * 
 *
 * @package App\Models
 */
class SpeciCustomQuestionTranslaion extends Model
{
	protected $table = 'speci_custom_question_translaions';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'spaci_custom_question_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'spaci_custom_question_id',
		'title'
	];

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
