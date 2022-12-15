<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_details', function (Blueprint $table) {
            $table->foreign(['specialization_id'], 'special_index')->references(['id'])->on('specializations');
            $table->foreign(['appoint_id'], 'appoint_id_index')->references(['id'])->on('appointments');
            $table->foreign(['doctor_id'], 'doctor_id_index')->references(['id'])->on('users');
            $table->foreign(['city_id'], 'city_index')->references(['id'])->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_details', function (Blueprint $table) {
            $table->dropForeign('special_index');
            $table->dropForeign('appoint_id_index');
            $table->dropForeign('doctor_id_index');
            $table->dropForeign('city_index');
        });
    }
}
