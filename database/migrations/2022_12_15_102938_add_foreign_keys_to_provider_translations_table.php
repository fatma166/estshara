<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProviderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provider_translations', function (Blueprint $table) {
            $table->foreign(['provider_id'], 'provider_translations_ibfk_1')->references(['id'])->on('providers');
            $table->foreign(['locale'], 'provider_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_translations', function (Blueprint $table) {
            $table->dropForeign('provider_translations_ibfk_1');
            $table->dropForeign('provider_translations_ibfk_2');
        });
    }
}
