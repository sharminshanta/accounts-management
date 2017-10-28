<?php

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
            $table->string('uuid', 36);
            $table->string('username', 120);
            $table->string('email_address', 120)->unique();
            $table->string('password', 36);
            $table->string('password_token', 120);
            $table->tinyInteger('status')->default(1)->comment('1 = Active, 2 = Inactive');
            $table->tinyInteger('is_vissible')->default(1)->comment('1 = Visible, 2 = Disable');
            $table->dateTime('last_seen');
            $table->rememberToken();
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
