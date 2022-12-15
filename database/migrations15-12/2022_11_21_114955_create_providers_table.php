<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('phone', 100);
            $table->integer('lat');
            $table->integer('long');
            $table->integer('appoint_id')->index('appoint_index');
            $table->integer('cat_id')->index('category_id');
            $table->enum('type', ['hospital', 'scan_center', 'pharmacy', '']);
            $table->integer('city_id')->index('city_id_index');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
