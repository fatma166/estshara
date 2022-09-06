<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMethodTransalation
 * 
 * @property int $id
 * @property int $locale
 * @property int $method_id
 * @property string $name
 * 
 * @property PaymentMethod $payment_method
 *
 * @package App\Models
 */
class PaymentMethodTransalation extends Model
{
	protected $table = 'payment_method_transalations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'method_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'method_id',
		'name'
	];

	public function payment_method()
	{
		return $this->belongsTo(PaymentMethod::class, 'method_id');
	}
}
