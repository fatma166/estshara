<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGovernoratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('governorates', function (Blueprint $table) {
            $table->foreign(['country_id'], 'governorates_ibfk_1')->references(['id'])->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('governorates', function (Blueprint $table) {
            $table->dropForeign('governorates_ibfk_1');
        });
    }
}
