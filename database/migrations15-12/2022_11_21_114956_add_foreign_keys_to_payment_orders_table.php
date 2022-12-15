<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_orders', function (Blueprint $table) {
            $table->foreign(['order_number'], 'payment_orders_ibfk_1')->references(['order_number'])->on('orders');
            $table->foreign(['transaction_id'], 'payment_orders_ibfk_2')->references(['transaction_id'])->on('payment_logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_orders', function (Blueprint $table) {
            $table->dropForeign('payment_orders_ibfk_1');
            $table->dropForeign('payment_orders_ibfk_2');
        });
    }
}
