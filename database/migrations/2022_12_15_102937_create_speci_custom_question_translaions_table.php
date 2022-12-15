<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciCustomQuestionTranslaionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speci_custom_question_translaions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale')->index('locale');
            $table->integer('spaci_custom_question_id');
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
        Schema::dropIfExists('speci_custom_question_translaions');
    }
}
