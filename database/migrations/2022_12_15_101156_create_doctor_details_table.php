<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_details', function (Blueprint $table) {
            $table->integer('doctor_id')->index('doctor_id_index');
            $table->integer('specialization_id')->index('special_index');
            $table->integer('national_id');
            $table->integer('city_id')->index('city_index');
            $table->integer('appoint_id')->index('appoint_id_index');
            $table->integer('experience_years');
            $table->integer('provider_id');
            $table->mediumText('instractions');
            $table->json('prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_details');
    }
}
