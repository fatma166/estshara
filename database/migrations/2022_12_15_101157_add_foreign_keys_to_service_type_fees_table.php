<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServiceTypeFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_type_fees', function (Blueprint $table) {
            $table->foreign(['service_type_id'], 'service_type_fees_ibfk_1')->references(['id'])->on('service_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_type_fees', function (Blueprint $table) {
            $table->dropForeign('service_type_fees_ibfk_1');
        });
    }
}
