<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $consalt_id
 * @property int $patient_id
 * @property int $grade
 * @property int $created_at
 * @property string $deleted_at
 * 
 * @property Consulation $consulation
 * @property User $user
 * @property Collection|CommentTranslation[] $comment_translations
 *
 * @package App\Models
 */
class Comment extends Model
{
	use SoftDeletes;
	protected $table = 'comments';
	public $timestamps = false;

	protected $casts = [
		'consalt_id' => 'int',
		'patient_id' => 'int',
		'doctor_id'  => 'int',
		'grade' => 'int',
		'created_at' => 'int'
	];

	protected $fillable = [
		'consalt_id',
		'patient_id',
		'doctor_id',
		'grade'
	];

	public function consulation()
	{
		return $this->belongsTo(Consulation::class, 'consalt_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'patient_id');
	}
	public function doctor()
	{
		return $this->belongsTo(User::class, 'doctor_id','id');
	}

	public function comment_translations()
	{
		return $this->hasMany(CommentTranslation::class);
	}
}
