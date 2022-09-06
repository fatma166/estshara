<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Coupon
 * 
 * @property int $id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $coupons_type_id
 * @property float $percent
 *
 * @package App\Models
 */
class Coupon extends Model
{
	protected $table = 'coupons';
	public $timestamps = false;

	protected $casts = [
		'coupons_type_id' => 'int',
		'percent' => 'float'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'coupons_type_id',
		'percent'
	];
}
