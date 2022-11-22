<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciCustomQuestionTranslaionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_custom_question_translaions', function (Blueprint $table) {
            $table->foreign(['locale'], 'speci_custom_question_translaions_ibfk_1')->references(['id'])->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_custom_question_translaions', function (Blueprint $table) {
            $table->dropForeign('speci_custom_question_translaions_ibfk_1');
        });
    }
}
