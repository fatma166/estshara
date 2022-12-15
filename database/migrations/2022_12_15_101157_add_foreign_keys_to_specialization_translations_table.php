<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpecializationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialization_translations', function (Blueprint $table) {
            $table->foreign(['specialization_id'], 'specialization_translations_ibfk_1')->references(['id'])->on('specializations');
            $table->foreign(['locale'], 'specialization_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialization_translations', function (Blueprint $table) {
            $table->dropForeign('specialization_translations_ibfk_1');
            $table->dropForeign('specialization_translations_ibfk_2');
        });
    }
}
