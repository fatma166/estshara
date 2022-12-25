<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fav_doctor extends Model
{
    use HasFactory;


    protected $fillable=['doctor_id','patient_id'];

    public function patient_fav_doctor(){
        $this->belongsTo(User::class);
    }
}
