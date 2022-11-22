<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_translations', function (Blueprint $table) {
            $table->foreign(['role_id'], 'role_translations_ibfk_1')->references(['id'])->on('roles__');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_translations', function (Blueprint $table) {
            $table->dropForeign('role_translations_ibfk_1');
        });
    }
}
