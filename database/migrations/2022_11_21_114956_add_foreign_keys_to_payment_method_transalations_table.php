<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentMethodTransalationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_method_transalations', function (Blueprint $table) {
            $table->foreign(['method_id'], 'payment_method_transalations_ibfk_1')->references(['id'])->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_method_transalations', function (Blueprint $table) {
            $table->dropForeign('payment_method_transalations_ibfk_1');
        });
    }
}
