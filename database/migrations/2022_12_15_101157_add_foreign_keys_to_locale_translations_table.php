<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLocaleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locale_translations', function (Blueprint $table) {
            $table->foreign(['locale'], 'locale_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locale_translations', function (Blueprint $table) {
            $table->dropForeign('locale_translations_ibfk_1');
        });
    }
}
