<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInsuranceCompanyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insurance_company_translations', function (Blueprint $table) {
            $table->foreign(['locale'], 'insurance_company_translations_ibfk_1')->references(['id'])->on('locales');
            $table->foreign(['insurance_company_id'], 'insurance_index')->references(['id'])->on('insurance_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insurance_company_translations', function (Blueprint $table) {
            $table->dropForeign('insurance_company_translations_ibfk_1');
            $table->dropForeign('insurance_index');
        });
    }
}
