<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CouponsType
 * 
 * @property int $id
 * @property string $type
 * @property int $service_type_id
 *
 * @package App\Models
 */
class CouponsType extends Model
{
	protected $table = 'coupons_types';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'service_type_id' => 'int'
	];

	protected $fillable = [
		'id',
		'type',
		'service_type_id'
	];
}
