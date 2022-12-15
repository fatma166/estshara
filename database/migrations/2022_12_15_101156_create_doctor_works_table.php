<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_works', function (Blueprint $table) {
            $table->integer('provider_id')->index('hospital_id');
            $table->integer('doctor_id')->index('doctor_id');
            $table->date('from');
            $table->date('to');
            $table->integer('id', true);

            $table->unique(['provider_id'], 'hospital_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_works');
    }
}
