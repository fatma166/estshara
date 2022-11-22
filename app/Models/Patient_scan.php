<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_scan extends Model
{
    use HasFactory;
    protected $fillable=['name','date','user_id'];


    public function userscans(){

          return $this->belongsTo('Users','user_id');
    }

    

    /**
     * Get all of the attachs for the Patient_scan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachs(): HasMany
    {
        return $this->hasMany(Patient_scan_attach::class, 'P_scan_id');
    }
  

}	
