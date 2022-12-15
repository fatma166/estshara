<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_translations', function (Blueprint $table) {
            $table->foreign(['category_id'], 'category_index')->references(['id'])->on('categories');
            $table->foreign(['locale'], 'category_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_translations', function (Blueprint $table) {
            $table->dropForeign('category_index');
            $table->dropForeign('category_translations_ibfk_1');
        });
    }
}
