<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('name');
            $table->string('last_name', 200);
            $table->string('email')->nullable()->unique('email');
            $table->integer('city_id');
            $table->date('birth_date');
            $table->boolean('email_isverified')->nullable()->default(false);
            $table->text('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->softDeletes();
            $table->string('phone', 20);
            $table->boolean('phone_isverified')->nullable()->default(false);
            $table->string('device_token', 200)->nullable()->default('1');
            $table->dateTime('join_date')->useCurrent();
            $table->boolean('active')->default(true);
            $table->json('device_info')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->tinyInteger('online_flag')->default(0);
            $table->char('gender', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
