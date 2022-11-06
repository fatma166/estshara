<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GovernorateTranslation
 * 
 * @property int $id
 * @property int $govarenment_id
 * @property int $locale
 * @property string $name
 * 
 *
 * @package App\Models
 */
class GovernorateTranslation extends Model
{
	protected $table = 'governorate_translations';
	public $timestamps = false;

	protected $casts = [
		'govarenment_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'govarenment_id',
		'locale',
		'name'
	];

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
	
	public function government()
	{
		return $this->belongsTo(Governorate::class);
	}
}
