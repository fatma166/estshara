<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorDetailTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_detail_translations', function (Blueprint $table) {
            $table->foreign(['docor_detail_id'], 'doctor_detail_index')->references(['doctor_id'])->on('doctor_details');
            $table->foreign(['locale'], 'doctor_detail_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_detail_translations', function (Blueprint $table) {
            $table->dropForeign('doctor_detail_index');
            $table->dropForeign('doctor_detail_translations_ibfk_1');
        });
    }
}
