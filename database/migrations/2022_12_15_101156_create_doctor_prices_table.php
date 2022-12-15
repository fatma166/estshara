<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_prices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('doctor_id');
            $table->integer('cons_type_id')->index('consalation_type_index');
            $table->float('price', 10, 0);
            $table->integer('discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_prices');
    }
}
