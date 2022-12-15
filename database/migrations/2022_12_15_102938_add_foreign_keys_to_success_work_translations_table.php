<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuccessWorkTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('success_work_translations', function (Blueprint $table) {
            $table->foreign(['success_work_id'], 'success_work_translations_ibfk_1')->references(['id'])->on('success_works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('success_work_translations', function (Blueprint $table) {
            $table->dropForeign('success_work_translations_ibfk_1');
        });
    }
}
