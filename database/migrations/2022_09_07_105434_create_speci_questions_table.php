<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speci_questions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->float('fee', 10, 0);
            $table->enum('type', ['t_f', 'choose', 'text', '']);
            $table->integer('special_id')->index('special_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speci_questions');
    }
}
