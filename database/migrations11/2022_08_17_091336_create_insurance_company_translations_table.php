<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceCompanyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_company_translations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale')->index('locale');
            $table->integer('insurance_company_id')->index('insurance_index');
            $table->string('name', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_company_translations');
    }
}
