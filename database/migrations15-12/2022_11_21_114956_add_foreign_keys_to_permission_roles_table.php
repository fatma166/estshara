<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_roles', function (Blueprint $table) {
            $table->foreign(['permission_id'], 'permission_index')->references(['id'])->on('permission');
            $table->foreign(['role_id'], 'role_index')->references(['id'])->on('roles__');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_roles', function (Blueprint $table) {
            $table->dropForeign('permission_index');
            $table->dropForeign('role_index');
        });
    }
}
