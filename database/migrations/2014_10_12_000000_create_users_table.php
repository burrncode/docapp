<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email')->unique();
                $table->boolean('gender');
                $table->string('password');
    
                $table->integer('role_id')->unsigned()->default(3);
                $table->string('profile_image');
                $table->boolean('notification')->default(1);

                $table->rememberToken();
                $table->timestamps();
            });
        };
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
