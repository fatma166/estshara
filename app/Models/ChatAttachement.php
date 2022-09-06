<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChatAttachement
 * 
 * @property int $id
 * @property int $chat_id
 * @property string $path
 *
 * @package App\Models
 */
class ChatAttachement extends Model
{
	protected $table = 'chat_attachements';
	public $timestamps = false;

	protected $casts = [
		'chat_id' => 'int'
	];

	protected $fillable = [
		'chat_id',
		'path'
	];
}
