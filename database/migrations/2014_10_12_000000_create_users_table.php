<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // the primary key of users table
            $table->id();
            // the user name of the account
            $table->string('name');
            // the user email; can be used in logging in
            $table->string('email')->unique();
            // stores the encrypted user password
            $table->string('password');
            // an api token assigned to user; is used in communication with font end
            $table->timestamp('api_token', 5)->nullable();
            // records the time user been created and updated
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
        // remove users table if it exists
        Schema::dropIfExists('users');
    }
};
