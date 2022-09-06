<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SuccessWorkTranslation
 * 
 * @property int $success_work_id
 * @property int $locale
 * @property string $description
 * 
 * @property SuccessWork $success_work
 *
 * @package App\Models
 */
class SuccessWorkTranslation extends Model
{
	protected $table = 'success_work_translations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'success_work_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'success_work_id',
		'locale',
		'description'
	];

	public function success_work()
	{
		return $this->belongsTo(SuccessWork::class);
	}
}
