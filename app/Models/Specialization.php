<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialization
 * 
 * @property int $id
 * @property int $img
 * @property string $code
 * @property int $parent_id
 * 
 * @property Collection|Consulation[] $consulations
 * @property DoctorDetail $doctor_detail
 * @property Collection|SpeciCustomQuestion[] $speci_custom_questions
 * @property Collection|SpeciQuestion[] $speci_questions
 * @property Collection|SpecializationTranslation[] $specialization_translations
 *
 * @package App\Models
 */
class Specialization extends Model
{
	protected $table = 'specializations';
	public $timestamps = false;

	protected $casts = [
		'img' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'img',
		'code',
		'parent_id'
	];

	public function consulations()
	{
		return $this->hasMany(Consulation::class, 'spacialization_id');
	}

	public function doctor_detail()
	{
		return $this->hasOne(DoctorDetail::class);
	}

	public function speci_custom_questions()
	{
		return $this->hasMany(SpeciCustomQuestion::class, 'special_id');
	}

	public function speci_questions()
	{
		return $this->hasMany(SpeciQuestion::class, 'special_id');
	}

	public function specialization_translations()
	{
		return $this->hasMany(SpecializationTranslation::class);
	}
}
