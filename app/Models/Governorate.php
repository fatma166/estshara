<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Governorate
 * 
 * @property int $id
 * @property int $country_id
 * 
 * @property Country $country
 * @property Collection|City[] $cities
 *
 * @package App\Models
 */
class Governorate extends Model
{
	protected $table = 'governorates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'country_id'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function cities()
	{
		return $this->hasMany(City::class);
	}
	public function govern_trans(){

		 return $this->hasMany(GovernorateTranslation::class,'govarenment_id','id');
	} 
}
