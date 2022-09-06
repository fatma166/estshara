<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorCompany
 * 
 * @property int $doctor_id
 * @property int $ins_company_id
 * 
 * @property User $user
 * @property InsuranceCompany $insurance_company
 *
 * @package App\Models
 */
class DoctorCompany extends Model
{
	protected $table = 'doctor_companies';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'doctor_id' => 'int',
		'ins_company_id' => 'int'
	];

	protected $fillable = [
		'doctor_id',
		'ins_company_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'doctor_id');
	}

	public function insurance_company()
	{
		return $this->belongsTo(InsuranceCompany::class, 'ins_company_id');
	}
}
