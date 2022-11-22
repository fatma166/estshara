<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_questions', function (Blueprint $table) {
            $table->foreign(['special_id'], 'speci_questions_ibfk_1')->references(['id'])->on('specializations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_questions', function (Blueprint $table) {
            $table->dropForeign('speci_questions_ibfk_1');
        });
    }
}
