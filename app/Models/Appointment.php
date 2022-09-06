<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 * 
 * @property int $id
 * @property string $appointment
 * 
 * @property DoctorDetail $doctor_detail
 * @property Collection|Provider[] $providers
 *
 * @package App\Models
 */
class Appointment extends Model
{
	protected $table = 'appointments';
	public $timestamps = false;

	protected $fillable = [
		'appointment'
	];

	public function doctor_detail()
	{
		return $this->hasOne(DoctorDetail::class, 'appoint_id');
	}

	public function providers()
	{
		return $this->hasMany(Provider::class, 'appoint_id');
	}
}
