<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_translations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('service_id')->index('service_id');
            $table->string('title', 100);
            $table->text('description');
            $table->mediumText('sub_title');
            $table->text('notice');
            $table->mediumText('tags');
            $table->text('meta_desc');
            $table->integer('locale')->index('locale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_translations');
    }
}
