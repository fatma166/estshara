<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocaleTranslation
 * 
 * @property int $id
 * @property string $name
 * @property int $locale
 * @property int $locale_id
 * 
 *
 * @package App\Models
 */
class LocaleTranslation extends Model
{
	protected $table = 'locale_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'locale_id' => 'int'
	];

	protected $fillable = [
		'name',
		'locale',
		'locale_id'
	];

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
