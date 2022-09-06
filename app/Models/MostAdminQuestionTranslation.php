<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MostAdminQuestionTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property string $title
 * @property int $most_admin_question_id
 * @property string $answer
 *
 * @package App\Models
 */
class MostAdminQuestionTranslation extends Model
{
	protected $table = 'most_admin_question_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'most_admin_question_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'title',
		'most_admin_question_id',
		'answer'
	];
}
