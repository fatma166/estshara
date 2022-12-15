<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientScanAttachsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_scan_attachs', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('path');
            $table->integer('P_scan_id',10);
          //  $table->forginId('P_scan_id')->constrained('patient_scans');
          $table->foreign('P_scan_id')->references('id')->on('patient_scans');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_scan_attachs');
    }
}
