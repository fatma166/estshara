<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentLog
 * 
 * @property int $id
 * @property int $transaction_id
 * @property int $service_type_id
 * @property int $method_id
 * @property int $transaction_status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property PaymentConsulation $payment_consulation
 * @property PaymentOrder $payment_order
 *
 * @package App\Models
 */
class PaymentLog extends Model
{
	protected $table = 'payment_logs';

	protected $casts = [
		'transaction_id' => 'int',
		'service_type_id' => 'int',
		'method_id' => 'int',
		'transaction_status' => 'int'
	];

	protected $fillable = [
		'transaction_id',
		'service_type_id',
		'method_id',
		'transaction_status'
	];

	public function payment_consulation()
	{
		return $this->hasOne(PaymentConsulation::class, 'transaction_id', 'transaction_id');
	}

	public function payment_order()
	{
		return $this->hasOne(PaymentOrder::class, 'transaction_id', 'transaction_id');
	}
	public function payment_method(){
		return $this->hasOne(PaymentOrder::class, 'method_id', 'id');
	}
}
