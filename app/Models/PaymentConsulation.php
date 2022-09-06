<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentConsulation
 * 
 * @property int $transaction_id
 * @property int $consaltation_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Consulation $consulation
 * @property PaymentLog $payment_log
 *
 * @package App\Models
 */
class PaymentConsulation extends Model
{
	protected $table = 'payment_consulations';
	public $incrementing = false;

	protected $casts = [
		'transaction_id' => 'int',
		'consaltation_id' => 'int'
	];

	protected $fillable = [
		'transaction_id',
		'consaltation_id'
	];

	public function consulation()
	{
		return $this->belongsTo(Consulation::class, 'consaltation_id');
	}

	public function payment_log()
	{
		return $this->belongsTo(PaymentLog::class, 'transaction_id', 'transaction_id');
	}
}
