<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConsulationTypeTransaltionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consulation_type_transaltions', function (Blueprint $table) {
            $table->foreign(['cons_type_id'], 'cons_type_index')->references(['id'])->on('consulation_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulation_type_transaltions', function (Blueprint $table) {
            $table->dropForeign('cons_type_index');
        });
    }
}
