<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceTranslation
 * 
 * @property int $id
 * @property int $service_id
 * @property string $title
 * @property string $description
 * @property string $sub_title
 * @property string $notice
 * @property string $tags
 * @property string $meta_desc
 * @property int $locale
 * 
 * @property Service $service
 *
 * @package App\Models
 */
class ServiceTranslation extends Model
{
	protected $table = 'service_translations';
	public $timestamps = false;

	protected $casts = [
		'service_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'service_id',
		'title',
		'description',
		'sub_title',
		'notice',
		'tags',
		'meta_desc',
		'locale'
	];

	public function service()
	{
		return $this->belongsTo(Service::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
