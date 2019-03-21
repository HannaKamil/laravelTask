<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image_uploaded');
            $table->string('category_name');
            $table->text('content');
//            $table->string('image_draged');
            
//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('all_news');
    }
}
