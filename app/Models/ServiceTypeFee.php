<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceTypeFee
 * 
 * @property int $id
 * @property int $fee
 * @property int $service_type_id
 * @property int $type
 * 
 * @property ServiceType $service_type
 *
 * @package App\Models
 */
class ServiceTypeFee extends Model
{
	protected $table = 'service_type_fees';
	public $timestamps = false;

	protected $casts = [
		'fee' => 'int',
		'service_type_id' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'fee',
		'service_type_id',
		'type'
	];

	public function service_type()
	{
		return $this->belongsTo(ServiceType::class);
	}
}
