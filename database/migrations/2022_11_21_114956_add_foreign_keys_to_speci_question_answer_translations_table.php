<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciQuestionAnswerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_question_answer_translations', function (Blueprint $table) {
            $table->foreign(['answer_id'], 'speci_question_answer_translations_ibfk_1')->references(['id'])->on('speci_question_answers');
            $table->foreign(['locale'], 'speci_question_answer_translations_ibfk_2')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_question_answer_translations', function (Blueprint $table) {
            $table->dropForeign('speci_question_answer_translations_ibfk_1');
            $table->dropForeign('speci_question_answer_translations_ibfk_2');
        });
    }
}
