<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissionTranslation
 * 
 * @property int $id
 * @property int $permission_id
 * @property int $locale
 * @property string $key
 * 
 *
 * @package App\Models
 */
class PermissionTranslation extends Model
{
	protected $table = 'permission_translations';
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'locale',
		'key'
	];

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
