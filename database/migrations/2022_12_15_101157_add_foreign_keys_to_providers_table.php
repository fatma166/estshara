<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->foreign(['appoint_id'], 'appoint_index')->references(['id'])->on('appointments');
            $table->foreign(['city_id'], 'city_id_index')->references(['id'])->on('cities');
            $table->foreign(['cat_id'], 'category_id')->references(['id'])->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->dropForeign('appoint_index');
            $table->dropForeign('city_id_index');
            $table->dropForeign('category_id');
        });
    }
}
