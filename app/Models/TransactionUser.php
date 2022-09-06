<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransactionUser
 * 
 * @property int $id
 * @property int $user_id
 * @property int $transaction_id
 *
 * @package App\Models
 */
class TransactionUser extends Model
{
	protected $table = 'transaction_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int',
		'transaction_id' => 'int'
	];

	protected $fillable = [
		'id',
		'user_id',
		'transaction_id'
	];
}
