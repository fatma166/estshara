<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientScansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_scans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('patient_scans');
    }
}
