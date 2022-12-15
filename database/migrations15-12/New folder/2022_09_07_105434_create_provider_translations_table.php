<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_translations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('locale')->index('locale');
            $table->integer('provider_id')->index('provider_id');
            $table->string('name', 200);
            $table->mediumText('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_translations');
    }
}
