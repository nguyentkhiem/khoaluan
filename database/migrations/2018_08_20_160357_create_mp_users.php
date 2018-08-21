<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('mp_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('email');
            $table->string('password');
            $table->string('user_img');
            $table->tinyInteger('user_level')->comment('Admin: 1, Mod: 2, User: 3');
            $table->string('token');
            $table->tinyInteger('status')->default(0)->comment('Active: 1, Inactive: 0');
            $table->rememberToken();
            $table->integer('created_id')->length(8)->nullable();
            $table->integer('updated_id')->length(8)->nullable();
            $table->integer('deleted_id')->length(8)->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('mp_users');
    }
}
