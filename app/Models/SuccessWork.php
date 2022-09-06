<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SuccessWork
 * 
 * @property int $doctor_id
 * @property Carbon $from
 * @property Carbon $to
 * @property int $id
 * @property string $img
 * 
 * @property SuccessWorkTranslation $success_work_translation
 *
 * @package App\Models
 */
class SuccessWork extends Model
{
	protected $table = 'success_works';
	public $timestamps = false;

	protected $casts = [
		'doctor_id' => 'int'
	];

	protected $dates = [
		'from',
		'to'
	];

	protected $fillable = [
		'doctor_id',
		'from',
		'to',
		'img'
	];

	public function success_work_translation()
	{
		return $this->hasOne(SuccessWorkTranslation::class);
	}
}
