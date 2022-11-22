<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_detail extends Model
{
    use HasFactory;
    public $timestamps=false;

	protected $fillable = [
        'weight',
        'length',
        'rh',
        'smoking',
        'alchole',
        'Marital_status'

    ];
 
}
