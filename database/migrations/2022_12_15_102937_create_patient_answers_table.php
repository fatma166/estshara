<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_answers', function (Blueprint $table) {
            $table->integer('user_id')->index('user_id');
            $table->integer('question_id')->index('question_id');
            $table->integer('answer_id')->nullable()->index('answer_id');
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
        Schema::dropIfExists('patient_answers');
    }
}
