<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMostAdminQuestionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('most_admin_question_translations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale');
            $table->text('title');
            $table->integer('most_admin_question_id');
            $table->text('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('most_admin_question_translations');
    }
}
