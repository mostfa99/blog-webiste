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
        Schema::create('posts_details', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Latest News & Blog');
            $table->text('content')->default('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.');
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
        Schema::dropIfExists('posts_details');
    }
};
