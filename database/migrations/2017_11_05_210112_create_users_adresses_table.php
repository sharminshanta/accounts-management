<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 36)->unique();
            $table->integer('user_id');
            $table->string('street', 80)->default(null);
            $table->string('street_secondary', 80)->default(null);
            $table->string('city', 80)->default(null);
            $table->string('state', 80)->default(null);
            $table->string('postal_code', 80)->default(null);
            $table->string('country', 80)->default(null);
            $table->string('fax', 80)->default(null);
            $table->string('type')->default('Primary');
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
        Schema::dropIfExists('users_addresses');
    }
}
