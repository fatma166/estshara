<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermissionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_translations', function (Blueprint $table) {
            $table->foreign(['locale'], 'permission_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_translations', function (Blueprint $table) {
            $table->dropForeign('permission_translations_ibfk_1');
        });
    }
}
