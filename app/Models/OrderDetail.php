<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property string $order_number
 * @property string $name
 * @property string $mobile
 * @property string $mobile2
 * @property string $address
 * @property string $notes
 * @property string $district_name
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_details';
	public $timestamps = false;

	protected $fillable = [
		'order_number',
		'name',
		'mobile',
		'mobile2',
		'address',
		'notes',
		'district_name'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_number', 'order_number');
	}
}
