<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorWorkTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_work_translations', function (Blueprint $table) {
            $table->foreign(['docotor_work_id'], 'doctor_work_index')->references(['id'])->on('doctor_works');
            $table->foreign(['locale'], 'doctor_work_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_work_translations', function (Blueprint $table) {
            $table->dropForeign('doctor_work_index');
            $table->dropForeign('doctor_work_translations_ibfk_1');
        });
    }
}
