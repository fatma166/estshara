<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InsuranceCompanyTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $insurance_company_id
 * @property string $name
 * 
 * @property InsuranceCompany $insurance_company
 *
 * @package App\Models
 */
class InsuranceCompanyTranslation extends Model
{
	protected $table = 'insurance_company_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'insurance_company_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'insurance_company_id',
		'name'
	];

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}

	public function insurance_company()
	{
		return $this->belongsTo(InsuranceCompany::class);
	}
}
