<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * 
 * @property Collection|CountryTranslation[] $country_translations
 * @property Collection|Governorate[] $governorates
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';
	public $timestamps = false;

	public function country_translations()
	{
		return $this->hasMany(CountryTranslation::class);
	}

	public function governorates()
	{
		return $this->hasMany(Governorate::class);
	}
}
