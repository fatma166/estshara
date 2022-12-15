<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciQuestionTranslaionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speci_question_translaions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale');
            $table->integer('spaci_question_id')->index('spaci_question_id');
            $table->mediumText('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speci_question_translaions');
    }
}
