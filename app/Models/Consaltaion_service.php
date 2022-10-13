<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentTranslation
 * 
 * @property int $consulation_id
 * @property int $service_id

 *
 * @package App\Models
 */
class Consaltaion_service extends Model
{
	protected $table = 'consaltaion_services';
	public $timestamps = false;

	protected $fillable = [
		'consulation_id',
		'service_id',
		
	];

	public function services()
	{
		return $this->belongsTo(Service::class,'service_id');
	}

	public function consulations()
	{
		return $this->belongsTo(Consulation::class, 'consulation_id');
	}
}
