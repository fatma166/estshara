<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('order_number', 200)->unique('order_number_2');
            $table->string('name', 100);
            $table->string('mobile', 20);
            $table->string('mobile2', 20);
            $table->text('address');
            $table->text('notes');
            $table->string('district_name', 200);

            $table->index(['order_number'], 'order_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
