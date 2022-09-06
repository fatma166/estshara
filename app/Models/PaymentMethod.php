<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMethod
 * 
 * @property int $id
 * @property int $status
 * @property int $number_convert
 * @property float $coast_value
 * 
 * @property Collection|PaymentMethodTransalation[] $payment_method_transalations
 *
 * @package App\Models
 */
class PaymentMethod extends Model
{
	protected $table = 'payment_methods';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'number_convert' => 'int',
		'coast_value' => 'float'
	];

	protected $fillable = [
		'status',
		'number_convert',
		'coast_value'
	];

	public function payment_method_transalations()
	{
		return $this->hasMany(PaymentMethodTransalation::class, 'method_id');
	}
}
