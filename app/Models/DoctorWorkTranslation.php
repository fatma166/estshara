<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorWorkTranslation
 * 
 * @property int $docotor_work_id
 * @property int $locale
 * @property string $description
 * 
 * @property DoctorWork $doctor_work
 *
 * @package App\Models
 */
class DoctorWorkTranslation extends Model
{
	protected $table = 'doctor_work_translations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'docotor_work_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'docotor_work_id',
		'locale',
		'description'
	];

	public function doctor_work()
	{
		return $this->belongsTo(DoctorWork::class, 'docotor_work_id');
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
