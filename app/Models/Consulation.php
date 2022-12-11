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
 * Class Consulation
 * 
 * @property int $id
 * @property string $status
 * @property int $consultation_key
 * @property int $patient_id
 * @property int $doctor_id
 * @property int $spacialization_id
 *
 * @property Carbon $date
 * @property Carbon $end_date
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Consulation $consulation
 * @property User $user
 *
 * @property Specialization $specialization
 * @property Attachment $attachment
 * @property Collection|Comment[] $comments
 * @property PaymentConsulation $payment_consulation
 *
 * @package App\Models
 */
class Consulation extends Model
{
	use SoftDeletes;
	protected $table = 'consulations';

	protected $casts = [
		'consultation_key' => 'int',
		'patient_id' => 'int',
		'doctor_id' => 'int',
		'spacialization_id' => 'int',
		//'service_type_id' => 'int'
	];

	protected $dates = [
		'date',
		'end_date'
	];

	protected $fillable = [
		'status',
		'consultation_key',
		'patient_id',
		'doctor_id',
		'spacialization_id',
		//'service_type_id',
		'date',
		'end_date'
	];

	public function consulation()
	{
		return $this->hasOne(Consulation::class, 'consultation_key', 'consultation_key');
	}

	public function user()
	{
		return $this->belongsTo(User::class,'doctor_id');
	}

	/*public function service_type()
	{
		return $this->belongsTo(ServiceType::class);
	}*/

	public function specialization()
	{
		return $this->belongsTo(Specialization::class, 'spacialization_id');
	}

	public function attachment()
	{
		return $this->hasOne(Attachment::class, 'consalt_id');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'consalt_id');
	}

	public function payment_consulation()
	{
		return $this->hasOne(PaymentConsulation::class, 'consaltation_id');
	}
	/*public function consaltaion_services()
	{
		return $this->hasMany(Consaltaion_service::class,'service_id');
	}*/

	public function chats()
	{
		return $this->hasMany(Chat::class,'consalt_id');
	}

}
