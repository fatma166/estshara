<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoryTranslation
 * 
 * @property int $id
 * @property int $category_id
 * @property int $locale
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Category $category
 *
 * @package App\Models
 */
class CategoryTranslation extends Model
{
	use SoftDeletes;
	protected $table = 'category_translations';

	protected $casts = [
		'category_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'category_id',
		'locale',
		'title'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
