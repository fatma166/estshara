<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_scan_attach extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table='patient_scan_attachs';
    protected $fillable=['path','P_scan_id'];

        /**
         * Get the user that owns the Patient_scan_attach
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
    public function scan_attach()
        {
            return $this->belongsTo(User::class, 'P_scan_id');
        }
    
}
