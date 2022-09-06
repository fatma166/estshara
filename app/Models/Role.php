<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $type
 * 
 * @property Collection|Permission[] $permissions
 * @property Collection|RoleTranslation[] $role_translations
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'permission_roles');
	}

	public function role_translations()
	{
		return $this->hasMany(RoleTranslation::class);
	}
}
