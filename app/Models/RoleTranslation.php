<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleTranslation
 * 
 * @property int $id
 * @property int $role_id
 * @property int $locale
 * @property string $name
 * 
 * @property Role $role
 *
 * @package App\Models
 */
class RoleTranslation extends Model
{
	protected $table = 'role_translations';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'role_id',
		'locale',
		'name'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
