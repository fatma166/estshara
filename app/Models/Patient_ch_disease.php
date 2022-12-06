<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_ch_disease extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function user_ch_disease(){

        return $this->belongsTo('Users','user_id');
    }

}
