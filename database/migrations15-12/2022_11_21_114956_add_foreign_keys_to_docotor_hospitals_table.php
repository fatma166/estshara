<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDocotorHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('docotor_hospitals', function (Blueprint $table) {
            $table->foreign(['doctor_id'], 'doctor_index')->references(['id'])->on('users');
            $table->foreign(['hospital_id'], 'provider_index')->references(['id'])->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('docotor_hospitals', function (Blueprint $table) {
            $table->dropForeign('doctor_index');
            $table->dropForeign('provider_index');
        });
    }
}
