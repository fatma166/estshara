<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Locale
 * 
 * @property int $id
 * @property int $locale_code
 * 
 * @property Collection|CategoryTranslation[] $category_translations
 * @property Collection|CityTransalation[] $city_transalations
 * @property Collection|CommentTranslation[] $comment_translations
 * @property Collection|CountryTranslation[] $country_translations
 * @property DoctorDetailTranslation $doctor_detail_translation
 * @property DoctorWorkTranslation $doctor_work_translation
 * @property Collection|GovernorateTranslation[] $governorate_translations
 * @property Collection|InsuranceCompanyTranslation[] $insurance_company_translations
 * @property Collection|LocaleTranslation[] $locale_translations
 * @property Collection|PermissionTranslation[] $permission_translations
 * @property Collection|ProviderTranslation[] $provider_translations
 * @property Collection|ServiceTranslation[] $service_translations
 * @property ServiceTypeTranslation $service_type_translation
 * @property Collection|SpeciCustomQuestionAnswerTranslation[] $speci_custom_question_answer_translations
 * @property Collection|SpeciCustomQuestionTranslaion[] $speci_custom_question_translaions
 * @property Collection|SpeciQuestionAnswerTranslation[] $speci_question_answer_translations
 * @property Collection|SpecializationTranslation[] $specialization_translations
 *
 * @package App\Models
 */
class Locale extends Model
{
	protected $table = 'locales';
	public $timestamps = false;

	protected $casts = [
		'locale_code' => 'int'
	];

	protected $fillable = [
		'locale_code'
	];

	public function category_translations()
	{
		return $this->hasMany(CategoryTranslation::class, 'locale');
	}

	public function city_transalations()
	{
		return $this->hasMany(CityTransalation::class, 'locale');
	}

	public function comment_translations()
	{
		return $this->hasMany(CommentTranslation::class, 'locale');
	}

	public function country_translations()
	{
		return $this->hasMany(CountryTranslation::class, 'locale');
	}

	public function doctor_detail_translation()
	{
		return $this->hasOne(DoctorDetailTranslation::class, 'locale');
	}

	public function doctor_work_translation()
	{
		return $this->hasOne(DoctorWorkTranslation::class, 'locale');
	}

	public function governorate_translations()
	{
		return $this->hasMany(GovernorateTranslation::class, 'locale');
	}

	public function insurance_company_translations()
	{
		return $this->hasMany(InsuranceCompanyTranslation::class, 'locale');
	}

	public function locale_translations()
	{
		return $this->hasMany(LocaleTranslation::class, 'locale');
	}

	public function permission_translations()
	{
		return $this->hasMany(PermissionTranslation::class, 'locale');
	}

	public function provider_translations()
	{
		return $this->hasMany(ProviderTranslation::class, 'locale');
	}

	public function service_translations()
	{
		return $this->hasMany(ServiceTranslation::class, 'locale');
	}

	public function service_type_translation()
	{
		return $this->hasOne(ServiceTypeTranslation::class, 'locale');
	}

	public function speci_custom_question_answer_translations()
	{
		return $this->hasMany(SpeciCustomQuestionAnswerTranslation::class, 'locale');
	}

	public function speci_custom_question_translaions()
	{
		return $this->hasMany(SpeciCustomQuestionTranslaion::class, 'locale');
	}

	public function speci_question_answer_translations()
	{
		return $this->hasMany(SpeciQuestionAnswerTranslation::class, 'locale');
	}

	public function specialization_translations()
	{
		return $this->hasMany(SpecializationTranslation::class, 'locale');
	}
}
