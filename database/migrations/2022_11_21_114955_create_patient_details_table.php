<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->integer('user_id')->index('patient');
            $table->float('weight', 10, 0);
            $table->float('length', 10, 0);
            $table->char('rh', 20);
            $table->tinyInteger('smoking');
            $table->tinyInteger('alchole');
            $table->enum('Marital_status', ['married', 'non married'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_details');
    }
}
