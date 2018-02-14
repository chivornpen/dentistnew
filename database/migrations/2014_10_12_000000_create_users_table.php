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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('tel',20)->nullable();
            $table->string('password');
            $table->integer('staff_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->boolean('isChangepw')->default(0);
            $table->boolean('isActive')->default(0);
            $table->date('startDate')->nullable();
            $table->date('expiredDate')->nullable();
            $table->boolean('isLock')->nullable();
            $table->string('signOn')->nullable();
            $table->integer('userAttempt')->nullable();
            $table->integer('sysAttempt')->nullable();
            $table->decimal('changeCycle')->nullable();
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
