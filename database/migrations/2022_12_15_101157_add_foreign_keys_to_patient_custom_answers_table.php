<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientCustomAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_custom_answers', function (Blueprint $table) {
            $table->foreign(['custom_answer_id'], 'custom_answer_index')->references(['id'])->on('speci_questions');
            $table->foreign(['user_id'], 'patient_custom_answers_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['custom_question_id'], 'custom_question_index')->references(['id'])->on('speci_custom_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_custom_answers', function (Blueprint $table) {
            $table->dropForeign('custom_answer_index');
            $table->dropForeign('patient_custom_answers_ibfk_1');
            $table->dropForeign('custom_question_index');
        });
    }
}
