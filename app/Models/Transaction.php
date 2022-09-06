<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $transaction_id
 * @property int $service_type_id
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';
	public $timestamps = false;

	protected $casts = [
		'transaction_id' => 'int',
		'service_type_id' => 'int'
	];

	protected $fillable = [
		'transaction_id',
		'service_type_id'
	];
}
