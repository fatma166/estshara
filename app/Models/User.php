<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Twilio\Rest\Client;
/**
 * Class User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string|null $email
 * @property int $city_id
 * @property Carbon $birth_date
 * @property bool|null $email_isverified
 * @property string|null $avatar
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string $phone
 * @property bool|null $phone_isverified
 * @property string|null $device_token
 * @property Carbon $join_date
 * @property bool $active
 * @property string|null $device_info
 * @property Carbon|null $last_login
 *
 * @property Collection|Comment[] $comments
 * @property Collection|Consulation[] $consulations
 * @property DocotorHospital $docotor_hospital
 * @property DoctorCompany $doctor_company
 * @property DoctorDetail $doctor_detail
 * @property Collection|Order[] $orders
 * @property PatientAnswer $patient_answer
 * @property PatientCustomAnswer $patient_custom_answer
 * @property Collection|SpeciCustomQuestion[] $speci_custom_questions
 *
 * @package App\Models
 */
class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

	use SoftDeletes;
	protected $table = 'users';

	/*protected $casts = [
		'role_id' => 'int',
		'city_id' => 'int',
		'email_isverified' => 'bool',
		'phone_isverified' => 'bool',
		'active' => 'bool'
	];*/

	protected $dates = [
		'birth_date',
		'email_verified_at',
		'join_date',
		'last_login'
	];

	protected $hidden = [
		'password',
		'remember_token',
		'device_token'
	];

	protected $fillable = [
		'role_id',
		'name',
		'last_name',
		'email',
		'city_id',
		'birth_date',
		'email_isverified',
		'avatar',
		'email_verified_at',
		'password',
		'remember_token',
		'phone',
		'phone_isverified',
		'device_token',
		'join_date',
		'active',
		'device_info',
		'last_login'
	];
	public function role()
	{
		return $this->hasOne(Role::class,'id','role_id');
	}
	 public function comments()
	{
		return $this->hasMany(Comment::class, 'patient_id');
	}

	public function comments_doctor()
	{
		return $this->hasMany(Comment::class,'doctor_id','id');
	}

	public function consulations()
	{
		return $this->hasMany(Consulation::class, 'patient_id');
	}

	public function docotor_hospital()
	{
		return $this->hasOne(DocotorHospital::class, 'doctor_id');
	}

	public function doctor_company()
	{
		return $this->hasOne(DoctorCompany::class, 'doctor_id');
	}

	public function doctor_detail()
	{
		return $this->hasOne(DoctorDetail::class, 'doctor_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function patient_answer()
	{
		return $this->hasOne(PatientAnswer::class);
	}

	public function patient_custom_answer()
	{
		return $this->hasOne(PatientCustomAnswer::class);
	}

	public function speci_custom_questions()
	{
		return $this->hasMany(SpeciCustomQuestion::class, 'doctor_id');
	}
 /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
    public function getJWTIdentifier()
    {
    return $this->getKey();
    }

    /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
    public function getJWTCustomClaims()
    {
    return [];
    }
	public function sendToken()
	{
		
		$token = mt_rand(100000, 999999);
		Session::put('token', $token);
		$twilio= new Client($_ENV['TWILIO_SID'], $_ENV['TWILIO_AUTH_TOKEN']);
		

             $message = $twilio->messages
                  ->create($this->phone, // to
                           ["body" => "Your auth token is " . $token, "from" => "+19893737698"]
                  );
	

	}
	public function validateToken($token)
	{
	  $validToken = Session::get('token');
	  if($token == $validToken) {
		Session::forget('token');
		//Auth::login($this);
		return true;
	  } else {
		return false;
	  }
	}

	public function user_from(){
		return $this->hasMany(Chat::class,'from_id');
	
	}

	public function user_to(){
		return $this->hasMany(Chat::class,'to_id');
	
	}

}
