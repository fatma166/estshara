<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorDetail
 * 
 * @property int $doctor_id
 * @property int $specialization_id
 * @property int $national_id
 * @property int $city_id
 * @property int $appoint_id
 * @property int $experience_years
 * 
 * @property Appointment $appointment
 * @property City $city
 * @property User $user
 * @property Specialization $specialization
 * @property DoctorDetailTranslation $doctor_detail_translation
 *
 * @package App\Models
 */
class DoctorDetail extends Model
{
	protected $table = 'doctor_details';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'doctor_id' => 'int',
		'specialization_id' => 'int',
		'national_id' => 'int',
		'city_id' => 'int',
		'appoint_id' => 'int',
		'experience_years' => 'int',
		'provider_id'=>'int',
		'online_flag'=>'int'
	];

	protected $fillable = [
		'doctor_id',
		'specialization_id',
		'national_id',
		'city_id',
		'appoint_id',
		'experience_years',
		'provider_id',
		'online_flag'
	];

	public function appointment()
	{
		return $this->belongsTo(Appointment::class, 'appoint_id');
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'doctor_id');
	}

	public function specialization()
	{
		return $this->belongsTo(Specialization::class);
	}

	public function doctor_detail_translation()
	{
		return $this->hasOne(DoctorDetailTranslation::class, 'docor_detail_id', 'doctor_id');
	}
	
	public function doctor_provider()
	{
		return $this->hasOne(Provider::class,'id','provider_id');
	}

	public function comments_doctor(){
		return $this->hasMany(Comment::class, 'doctor_id', 'doctor_id');
	}
	
	
}
