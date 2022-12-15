<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_companies', function (Blueprint $table) {
            $table->foreign(['doctor_id'], 'doctor_companies_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['ins_company_id'], 'doctor_companies_ibfk_2')->references(['id'])->on('insurance_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_companies', function (Blueprint $table) {
            $table->dropForeign('doctor_companies_ibfk_1');
            $table->dropForeign('doctor_companies_ibfk_2');
        });
    }
}
