<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientCustomAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_custom_answers', function (Blueprint $table) {
            $table->integer('user_id')->index('user_id');
            $table->integer('custom_question_id')->index('custom_question_index');
            $table->integer('custom_answer_id')->nullable()->index('custom_answer_index');
            $table->text('answer_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_custom_answers');
    }
}
