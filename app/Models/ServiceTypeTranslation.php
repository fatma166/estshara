<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceTypeTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $name
 * @property int $service_type_id
 * 
 * @property ServiceType $service_type
 *
 * @package App\Models
 */
class ServiceTypeTranslation extends Model
{
	protected $table = 'service_type_translations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'locale' => 'int',
		'name' => 'int',
		'service_type_id' => 'int'
	];

	protected $fillable = [
		'id',
		'locale',
		'name',
		'service_type_id'
	];

	public function service_type()
	{
		return $this->belongsTo(ServiceType::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
