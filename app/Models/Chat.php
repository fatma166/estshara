<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 * 
 * @property int $id
 * @property int $message
 * @property int $from_id
 * @property int $to_id
 * @property int $status
 * @property int $consalt_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class Chat extends Model
{
	protected $table = 'chats';

	protected $casts = [
		'message' => 'int',
		'from_id' => 'int',
		'to_id' => 'int',
		'status' => 'int',
		'consalt_id' => 'int',
		'created_at' => 'int',
		'updated_at' => 'int'
	];

	protected $fillable = [
		'message',
		'from_id',
		'to_id',
		'status',
		'consalt_id'
	];
	public function consalts()
	{
		return $this->belongsTo(consulation::class);
	}

}
