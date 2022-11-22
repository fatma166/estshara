<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_translations', function (Blueprint $table) {
            $table->foreign(['comment_id'], 'comment_index')->references(['id'])->on('comments');
            $table->foreign(['locale'], 'comment_translations_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_translations', function (Blueprint $table) {
            $table->dropForeign('comment_index');
            $table->dropForeign('comment_translations_ibfk_1');
        });
    }
}
