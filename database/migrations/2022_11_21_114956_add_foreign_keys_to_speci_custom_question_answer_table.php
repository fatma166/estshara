<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciCustomQuestionAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_custom_question_answer', function (Blueprint $table) {
            $table->foreign(['question_id'], 'speci_custom_question_answer_ibfk_1')->references(['id'])->on('speci_custom_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_custom_question_answer', function (Blueprint $table) {
            $table->dropForeign('speci_custom_question_answer_ibfk_1');
        });
    }
}
