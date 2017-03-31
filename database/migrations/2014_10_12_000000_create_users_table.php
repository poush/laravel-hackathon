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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('User');
            $table->string('email')->unique();
            $table->string('password');
            $table->smallInteger('power')->default(0);
            // 0 => normal users (extramural users)
            // 1 => Scientists
            // 2 => Director of Institute
            // 3 => Institute Admin
            // 4 => Head Office
            $table->rememberToken();
            $table->timestamps();
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
