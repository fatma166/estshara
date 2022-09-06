<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentTranslation
 * 
 * @property int $id
 * @property int $locale
 * @property int $comment_id
 * @property string $comment_text
 * 
 * @property Comment $comment
 *
 * @package App\Models
 */
class CommentTranslation extends Model
{
	protected $table = 'comment_translations';
	public $timestamps = false;

	protected $casts = [
		'locale' => 'int',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'locale',
		'comment_id',
		'comment_text'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}

	public function locale()
	{
		return $this->belongsTo(Locale::class, 'locale');
	}
}
