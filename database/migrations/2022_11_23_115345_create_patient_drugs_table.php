<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->mediumText('notes')->nullable();
            $table->integer('user_id');
            //  $table->forginId('P_scan_id')->constrained('patient_scans');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('patient_drugs');
    }
}
