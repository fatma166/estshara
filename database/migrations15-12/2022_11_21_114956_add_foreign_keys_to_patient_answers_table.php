<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_answers', function (Blueprint $table) {
            $table->foreign(['answer_id'], 'answer_index')->references(['id'])->on('speci_question_answers');
            $table->foreign(['user_id'], 'user_index')->references(['id'])->on('users');
            $table->foreign(['question_id'], 'question_index')->references(['id'])->on('speci_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_answers', function (Blueprint $table) {
            $table->dropForeign('answer_index');
            $table->dropForeign('user_index');
            $table->dropForeign('question_index');
        });
    }
}
