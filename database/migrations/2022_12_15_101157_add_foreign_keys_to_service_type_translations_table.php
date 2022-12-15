<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServiceTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_type_translations', function (Blueprint $table) {
            $table->foreign(['service_type_id'], 'service_type_translations_ibfk_1')->references(['id'])->on('service_types');
            $table->foreign(['locale'], 'service_type_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_type_translations', function (Blueprint $table) {
            $table->dropForeign('service_type_translations_ibfk_1');
            $table->dropForeign('service_type_translations_ibfk_2');
        });
    }
}
