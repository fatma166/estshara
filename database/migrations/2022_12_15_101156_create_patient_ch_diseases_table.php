<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientChDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_ch_diseases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('known_date');
            $table->mediumText('notes')->nullable();
            $table->integer('user_id')->index('patient_ch_diseases_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_ch_diseases');
    }
}
