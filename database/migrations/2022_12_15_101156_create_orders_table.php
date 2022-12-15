<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number', 200)->index('order_number');
            $table->integer('user_id')->nullable()->index('user_id_index');
            $table->integer('session_id')->nullable();
            $table->integer('token')->nullable();
            $table->string('status', 20)->nullable();
            $table->float('shipping', 10, 0)->nullable();
            $table->float('total', 10, 0)->nullable();
            $table->integer('item_count');
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile2', 20)->nullable();
            $table->mediumText('address')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->mediumText('notes')->nullable();
            $table->tinyInteger('checked_order')->default(0);
            $table->integer('city_id')->nullable()->index('city_id');
            $table->string('zone_name', 50)->nullable();
            $table->string('district_name', 100)->nullable();

            $table->unique(['order_number'], 'order_number_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
