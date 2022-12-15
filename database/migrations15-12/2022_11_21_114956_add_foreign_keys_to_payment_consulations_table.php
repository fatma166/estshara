<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentConsulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_consulations', function (Blueprint $table) {
            $table->foreign(['consaltation_id'], 'consalation_index')->references(['id'])->on('consulations');
            $table->foreign(['transaction_id'], 'transaction_index')->references(['transaction_id'])->on('payment_logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_consulations', function (Blueprint $table) {
            $table->dropForeign('consalation_index');
            $table->dropForeign('transaction_index');
        });
    }
}
