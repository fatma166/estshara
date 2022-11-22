<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciCustomQuestionAnswerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speci_custom_question_answer_translations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale')->index('locale');
            $table->integer('answer_id');
            $table->string('title', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speci_custom_question_answer_translations');
    }
}
