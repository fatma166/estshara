<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCountryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_translations', function (Blueprint $table) {
            $table->foreign(['country_id'], 'country_translations_ibfk_1')->references(['id'])->on('countries');
            $table->foreign(['locale'], 'country_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country_translations', function (Blueprint $table) {
            $table->dropForeign('country_translations_ibfk_1');
            $table->dropForeign('country_translations_ibfk_2');
        });
    }
}
