<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->tinyIncrements('id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->dateTime('email_verified_at')->nullable(false)->default(config('const.base_date_time'));
            $table->string('password')->nullable(false);
            $table->rememberToken()->nullable(false)->default('0');
            $table->dateTime('created_at')->nullable(false)->default(config('1000-01-01 00:00:00'));
            $table->dateTime('updated_at')->nullable(false)->default('1000-01-01 00:00:00');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
