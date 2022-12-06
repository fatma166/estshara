<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSurgeries extends Model
{
    use HasFactory;
     public $table='patient_surgeries';
     public $timestamps=false;
}
