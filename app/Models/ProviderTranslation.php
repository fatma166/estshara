<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProviderTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $provider_id
 * @property string $name
 * @property string $address
 * 
 * @property Provider $provider
 *
 * @package App\Models
 */
class ProviderTranslation extends Model
{
	protected $table = 'provider_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'provider_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'provider_id',
		'name',
		'address'
	];

	public function provider()
	{
		return $this->belongsTo(Provider::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
