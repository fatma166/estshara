<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTranslation
 * 
 * @property int $id
 * @property int $user_id
 * @property int $locale
 * @property string $name
 *
 * @package App\Models
 */
class UserTranslation extends Model
{
	protected $table = 'user_translations';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'user_id',
		'locale',
		'name'
	];
}
