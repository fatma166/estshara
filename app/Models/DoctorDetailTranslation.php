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
 * @property string $address
 * @property string $work_exeperinace
 * @property string $work_details
 * @property string $university
 * @property string $collage
 * @property int $graduation_year
 * @property string $graduation_grade
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
		'address' => 'string',
		'work_exeperinace' => 'string',
		'work_details' => 'string',
		'university' => 'string',
		'collage' => 'string',
		'graduation_year' => 'int',
		'graduation_grade' => 'string'
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
