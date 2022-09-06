<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentOrder
 * 
 * @property string $order_number
 * @property int $transaction_id
 * 
 * @property Order $order
 * @property PaymentLog $payment_log
 *
 * @package App\Models
 */
class PaymentOrder extends Model
{
	protected $table = 'payment_orders';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'transaction_id' => 'int'
	];

	protected $fillable = [
		'order_number',
		'transaction_id'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_number', 'order_number');
	}

	public function payment_log()
	{
		return $this->belongsTo(PaymentLog::class, 'transaction_id', 'transaction_id');
	}
}
