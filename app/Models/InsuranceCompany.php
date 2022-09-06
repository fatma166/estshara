<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InsuranceCompany
 * 
 * @property int $id
 * 
 * @property DoctorCompany $doctor_company
 * @property Collection|InsuranceCompanyTranslation[] $insurance_company_translations
 *
 * @package App\Models
 */
class InsuranceCompany extends Model
{
	protected $table = 'insurance_companies';
	public $timestamps = false;

	public function doctor_company()
	{
		return $this->hasOne(DoctorCompany::class, 'ins_company_id');
	}

	public function insurance_company_translations()
	{
		return $this->hasMany(InsuranceCompanyTranslation::class);
	}
}
