<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries' , function (Blueprint $table){
              $table->increments('id');
              $table->integer('products_id')->unsigned();
              $table->foreign('products_id')->references('id')->on('products');
              $table->integer('users_id')->unsigned();
              $table->foreign('users_id')->references('id')->on('users');
              $table->integer('quantity');
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
        Schema::drop('entries');
    }
}
