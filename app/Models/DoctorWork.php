<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorWork
 * 
 * @property int $provider_id
 * @property int $doctor_id
 * @property Carbon $from
 * @property Carbon $to
 * @property int $id
 * 
 * @property DoctorWorkTranslation $doctor_work_translation
 *
 * @package App\Models
 */
class DoctorWork extends Model
{
	protected $table = 'doctor_works';
	public $timestamps = false;

	protected $casts = [
		'provider_id' => 'int',
		'doctor_id' => 'int'
	];

	protected $dates = [
		'from',
		'to'
	];

	protected $fillable = [
		'provider_id',
		'doctor_id',
		'from',
		'to'
	];

	public function doctor_work_translation()
	{
		return $this->hasOne(DoctorWorkTranslation::class, 'docotor_work_id');
	}
	public function service()
	{
		return $this->hasOne(Service::class,'provider_id');
	}
}
