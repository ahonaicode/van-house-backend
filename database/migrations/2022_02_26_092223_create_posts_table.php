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
        Schema::create('posts', function (Blueprint $table) {
            // the primary key of the post
            $table->id();
            // the title of the post
            $table->string('title');
            // the date post is posted
            $table->dateTime('date');
            // the description in post
            $table->longText('description');
            // the link of the post
            $table->string('link');
            // the images if the post has
            $table->json('images')->nullable();
            // the details of the post
            $table->json('detailts');
            // the time when the post is fetched
            $table->timestamp('created_at'); //Note: colum is changed to timestamp here
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
