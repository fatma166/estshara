<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $country_id
 * @property string $name
 * 
 * @property Country $country
 *
 * @package App\Models
 */
class CountryTranslation extends Model
{
	protected $table = 'country_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'country_id',
		'name'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
