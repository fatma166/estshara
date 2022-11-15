<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property int $governorate_id
 * 
 * @property Governorate $governorate
 * @property DoctorDetail $doctor_detail
 * @property Collection|Order[] $orders
 * @property Collection|Provider[] $providers
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'cities';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'governorate_id' => 'int'
	];

	protected $fillable = [
		'governorate_id'
	];

	public function governorate()
	{
		return $this->belongsTo(Governorate::class);
	}

	public function doctor_detail()
	{
		return $this->hasOne(DoctorDetail::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function providers()
	{
		return $this->hasMany(Provider::class);
	}
	
	public function city_trans()
	{
		return $this->hasMany(CityTransalation::class,'city_id','id');
	}
}
