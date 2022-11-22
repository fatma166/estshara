<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCityTransalationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('city_transalations', function (Blueprint $table) {
            $table->foreign(['city_id'], 'city_transalations_ibfk_1')->references(['id'])->on('city_transalations');
            $table->foreign(['locale'], 'city_transalations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('city_transalations', function (Blueprint $table) {
            $table->dropForeign('city_transalations_ibfk_1');
            $table->dropForeign('city_transalations_ibfk_2');
        });
    }
}
