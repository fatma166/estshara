<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServiceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_translations', function (Blueprint $table) {
            $table->foreign(['service_id'], 'service_translations_ibfk_1')->references(['id'])->on('services');
            $table->foreign(['locale'], 'service_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_translations', function (Blueprint $table) {
            $table->dropForeign('service_translations_ibfk_1');
            $table->dropForeign('service_translations_ibfk_2');
        });
    }
}
