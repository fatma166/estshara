<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * 
 * @property int $id
 * @property int $code
 * @property int $category_id
 * @property int $provider_id
 * @property int $price
 * @property int $discount
 * @property int $status
 * @property string $img
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Provider $provider
 * @property Category $category
 * @property Collection|Orderitem[] $orderitems
 * @property Collection|ServiceTranslation[] $service_translations
 *
 * @package App\Models
 */
class Service extends Model
{
	use SoftDeletes;
	protected $table = 'services';

	protected $casts = [
		'code' => 'int',
		'category_id' => 'int',
		'provider_id' => 'int',
		'price' => 'int',
		'service_type'=>'int',
		'discount' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'code',
		'category_id',
		'provider_id',
		'price',
		'service_type',
		'discount',
		'status',
		'img'
	];

	public function provider()
	{
		return $this->belongsTo(Provider::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function orderitems()
	{
		return $this->hasMany(Orderitem::class);
	}

	public function service_translations()
	{
		return $this->hasMany(ServiceTranslation::class);
	}
	public function services_consalt()
	{
		return $this->hasMany(Consaltaion_service::class,'service_id');
	}
	public function service_type()
	{
		return $this->hasOne(ServiceType::class,'id','service_type');
	}
	
	
}
