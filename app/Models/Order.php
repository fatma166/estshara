<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property string $order_number
 * @property int|null $user_id
 * @property int|null $session_id
 * @property int|null $token
 * @property string|null $status
 * @property float|null $shipping
 * @property float|null $total
 * @property int $item_count
 * @property string|null $name
 * @property string|null $mobile
 * @property string|null $mobile2
 * @property string|null $address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $notes
 * @property int $checked_order
 * @property int|null $city_id
 * @property string|null $zone_name
 * @property string|null $district_name
 * 
 * @property City|null $city
 * @property User|null $user
 * @property OrderDetail $order_detail
 * @property Orderitem $orderitem
 * @property PaymentOrder $payment_order
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'session_id' => 'int',
		'token' => 'int',
		'shipping' => 'float',
		'total' => 'float',
		'item_count' => 'int',
		'checked_order' => 'int',
		'city_id' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'order_number',
		'user_id',
		'session_id',
		'token',
		'status',
		'shipping',
		'total',
		'item_count',
		'name',
		'mobile',
		'mobile2',
		'address',
		'notes',
		'checked_order',
		'city_id',
		'zone_name',
		'district_name'
	];

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function order_detail()
	{
		return $this->hasOne(OrderDetail::class, 'order_number', 'order_number');
	}

	public function orderitem()
	{
		return $this->hasOne(Orderitem::class, 'order_number', 'order_number');
	}

	public function payment_order()
	{
		return $this->hasOne(PaymentOrder::class, 'order_number', 'order_number');
	}
}
