<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderitem
 * 
 * @property int $id
 * @property int|null $service_id
 * @property string|null $order_number
 * @property int|null $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $price
 * @property int $size
 * @property int $paid
 * 
 * @property Order|null $order
 * @property Service|null $service
 *
 * @package App\Models
 */
class Orderitem extends Model
{
	protected $table = 'orderitems';

	protected $casts = [
		'service_id' => 'int',
		'quantity' => 'int',
		'price' => 'int',
		'size' => 'int',
		'paid' => 'int'
	];

	protected $fillable = [
		'service_id',
		'order_number',
		'quantity',
		'price',
		'size',
		'paid'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_number', 'order_number');
	}

	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
