<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorDetailTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_detail_translations', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('locale')->index('locale');
            $table->integer('docor_detail_id')->index('doctor_detail_index');
            $table->integer('address');
            $table->integer('work_exeperinace');
            $table->integer('work_details');
            $table->integer('university');
            $table->integer('collage');
            $table->integer('graduation_year');
            $table->integer('graduation_grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_detail_translations');
    }
}
