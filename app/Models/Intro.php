<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class  Intro
 *
 * @package App\Models
 */
class Intro extends Model
{
	protected $table = 'app_intro';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'img',
        'title',
        'description'
	];


}
