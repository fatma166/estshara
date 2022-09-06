<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorDetailTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $docor_detail_id
 * @property int $address
 * @property int $work_exeperinace
 * @property int $work_details
 * @property int $university
 * @property int $collage
 * @property int $graduation_year
 * @property int $graduation_grade
 * 
 * @property DoctorDetail $doctor_detail
 *
 * @package App\Models
 */
class DoctorDetailTranslation extends Model
{
	protected $table = 'doctor_detail_translations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'locale' => 'int',
		'docor_detail_id' => 'int',
		'address' => 'int',
		'work_exeperinace' => 'int',
		'work_details' => 'int',
		'university' => 'int',
		'collage' => 'int',
		'graduation_year' => 'int',
		'graduation_grade' => 'int'
	];

	protected $fillable = [
		'id',
		'locale',
		'docor_detail_id',
		'address',
		'work_exeperinace',
		'work_details',
		'university',
		'collage',
		'graduation_year',
		'graduation_grade'
	];

	public function doctor_detail()
	{
		return $this->belongsTo(DoctorDetail::class, 'docor_detail_id', 'doctor_id');
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
