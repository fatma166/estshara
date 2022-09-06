<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property int $parent_id
 * @property string $code
 * 
 * @property Collection|CategoryTranslation[] $category_translations
 * @property Collection|Provider[] $providers
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'code'
	];

	public function category_translations()
	{
		return $this->hasMany(CategoryTranslation::class);
	}

	public function providers()
	{
		return $this->hasMany(Provider::class, 'cat_id');
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
