<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecializationTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $specialization_id
 * @property string $name
 * 
 * @property Specialization $specialization
 *
 * @package App\Models
 */
class SpecializationTranslation extends Model
{
	protected $table = 'specialization_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'specialization_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'specialization_id',
		'name'
	];

	public function specialization()
	{
		return $this->belongsTo(Specialization::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
