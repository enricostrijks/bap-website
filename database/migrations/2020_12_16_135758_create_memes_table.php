<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('general', 255);
            $table->string('privacy', 255);
            $table->string('user_id', 255);
            $table->string('meme')->nullable();
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
        Schema::dropIfExists('memes');
    }
}
