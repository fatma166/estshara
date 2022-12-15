<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientScanAttachsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_scan_attachs', function (Blueprint $table) {
            $table->foreign(['P_scan_id'])->references(['id'])->on('patient_scans');
            $table->foreign(['P_scan_id'], 'scan_attach')->references(['id'])->on('patient_scans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_scan_attachs', function (Blueprint $table) {
            $table->dropForeign('patient_scan_attachs_p_scan_id_foreign');
            $table->dropForeign('scan_attach');
        });
    }
}
