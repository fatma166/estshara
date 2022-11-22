<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_question_answers', function (Blueprint $table) {
            $table->foreign(['question_id'], 'speci_question_answers_ibfk_1')->references(['id'])->on('speci_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_question_answers', function (Blueprint $table) {
            $table->dropForeign('speci_question_answers_ibfk_1');
        });
    }
}
