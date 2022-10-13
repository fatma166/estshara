<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Provider
 * 
 * @property int $id
 * @property string $phone
 * @property int $lat
 * @property int $long
 * @property int $appoint_id
 * @property int $cat_id
 * @property string $type
 * @property int $city_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Appointment $appointment
 * @property Category $category
 * @property City $city
 * @property DocotorHospital $docotor_hospital
 * @property Collection|ProviderTranslation[] $provider_translations
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Provider extends Model
{
	use SoftDeletes;
	protected $table = 'providers';

	protected $casts = [
		'lat' => 'int',
		'long' => 'int',
		'appoint_id' => 'int',
		'cat_id' => 'int',
		'city_id' => 'int'
	];

	protected $fillable = [
		'phone',
		'lat',
		'long',
		'appoint_id',
		'cat_id',
		'type',
		'city_id'
	];

	public function appointment()
	{
		return $this->belongsTo(Appointment::class, 'appoint_id');
	}

	public function category()
	{
		return $this->belongsTo(Category::class, 'cat_id');
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function docotor_hospital()
	{
		return $this->hasOne(DocotorHospital::class,'hospital_id');
	}

	public function provider_translations()
	{
		return $this->hasMany(ProviderTranslation::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
