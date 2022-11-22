<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('status', ['wait', 'open', 'finish', 'cancle']);
            $table->integer('consultation_key')->unique('consultation_key');
            $table->integer('patient_id');
            $table->integer('doctor_id')->index('patient_index');
            $table->integer('spacialization_id')->index('specializtion_index');
            $table->integer('service_type_id')->index('service_type_index');
            $table->timestamp('date')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('end_date')->nullable()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->softDeletes();

            $table->index(['consultation_key'], 'consultation_key_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulations');
    }
}
