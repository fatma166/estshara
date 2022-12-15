<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_prices', function (Blueprint $table) {
            $table->foreign(['cons_type_id'], 'consalation_type_index')->references(['id'])->on('consulation_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_prices', function (Blueprint $table) {
            $table->dropForeign('consalation_type_index');
        });
    }
}
