<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CityTransalation
 * 
 * @property int $id
 * @property int $city_id
 * @property int $locale
 * @property string $name
 * 
 * @property CityTransalation $city_transalation
 * @property Collection|CityTransalation[] $city_transalations
 *
 * @package App\Models
 */
class CityTransalation extends Model
{
	protected $table = 'city_transalations';
	public $timestamps = false;

	protected $casts = [
		'city_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'city_id',
		'locale',
		'name'
	];

	public function city_transalation()
	{
		return $this->belongsTo(City::class, 'city_id');
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}

	public function city_transalations()
	{
		return $this->hasMany(CityTransalation::class, 'city_id');
	}
}
