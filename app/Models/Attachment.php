<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attachment
 * 
 * @property int $id
 * @property int $consalt_id
 * @property int $path
 * @property string $type
 * 
 * @property Consulation $consulation
 *
 * @package App\Models
 */
class Attachment extends Model
{
	protected $table = 'attachments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'consalt_id' => 'int',
		'path' => 'int'
	];

	protected $fillable = [
		'id',
		'consalt_id',
		'path',
		'type'
	];

	public function consulation()
	{
		return $this->belongsTo(Consulation::class, 'consalt_id');
	}
}
