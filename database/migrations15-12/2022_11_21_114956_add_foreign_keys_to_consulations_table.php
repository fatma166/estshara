<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConsulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consulations', function (Blueprint $table) {
            $table->foreign(['service_type_id'], 'service_type_index')->references(['id'])->on('service_types');
            $table->foreign(['spacialization_id'], 'specializtion_index')->references(['id'])->on('specializations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulations', function (Blueprint $table) {
            $table->dropForeign('service_type_index');
            $table->dropForeign('specializtion_index');
        });
    }
}
