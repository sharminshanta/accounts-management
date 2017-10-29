<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name', 80);
            $table->string('last_name', 80);
            $table->string('title', 16)->default(null);
            $table->string('gender', 16)->default(null);
            $table->string('picture', 120)->default(null);
            $table->date('date_of_birth')->default(null);
            $table->string('timezone', 40)->default('UTC');
            $table->string('language', 40)->default('en_US');
            $table->string('security_questions_one', 80)->default(null);
            $table->string('security_questions_one_answer', 40)->default(null);
            $table->string('security_questions_two', 80)->default(null);
            $table->string('security_questions_two_answer', 40)->default(null);
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
        Schema::dropIfExists('users_profile');
    }
}
