<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocotorHospital
 * 
 * @property int $doctor_id
 * @property int $hospital_id
 * 
 * @property User $user
 * @property Provider $provider
 *
 * @package App\Models
 */
class DocotorHospital extends Model
{
	protected $table = 'docotor_hospitals';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'doctor_id' => 'int',
		'hospital_id' => 'int'
	];

	protected $fillable = [
		'doctor_id',
		'hospital_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'doctor_id');
	}

	public function provider()
	{
		return $this->belongsTo(Provider::class, 'hospital_id');
	}
}
