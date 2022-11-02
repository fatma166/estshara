<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceType
 * 
 * @property int $id
 * 
 * @property Collection|Consulation[] $consulations
 * @property Collection|ServiceTypeFee[] $service_type_fees
 * @property ServiceTypeTranslation $service_type_translation
 *
 * @package App\Models
 */
class ServiceType extends Model
{
	protected $table = 'service_types';
	public $timestamps = false;

	public function consulations()
	{
		return $this->hasMany(Consulation::class);
	}

	public function service_type_fees()
	{
		return $this->hasone(ServiceTypeFee::class,'service_type_id','id');
	}

	public function service_type_translation()
	{
		return $this->hasOne(ServiceTypeTranslation::class);
	}
}
