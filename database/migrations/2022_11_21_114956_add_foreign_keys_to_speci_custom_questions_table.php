<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpeciCustomQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speci_custom_questions', function (Blueprint $table) {
            $table->foreign(['special_id'], 'speci_custom_questions_ibfk_1')->references(['id'])->on('specializations');
            $table->foreign(['doctor_id'], 'speci_custom_questions_ibfk_2')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speci_custom_questions', function (Blueprint $table) {
            $table->dropForeign('speci_custom_questions_ibfk_1');
            $table->dropForeign('speci_custom_questions_ibfk_2');
        });
    }
}
