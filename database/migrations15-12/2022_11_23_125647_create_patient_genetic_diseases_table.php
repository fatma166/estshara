<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientGeneticDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_genetic_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation');
            $table->string('diseases_name');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_genetic_disease');
    }
}
