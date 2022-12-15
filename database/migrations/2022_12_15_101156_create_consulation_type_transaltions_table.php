<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsulationTypeTransaltionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulation_type_transaltions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cons_type_id')->index('cons_type_index');
            $table->integer('locale');
            $table->string('name', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulation_type_transaltions');
    }
}
