<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){
                $table->increments('id');
                $table->integer('categories_id')->unsigned();
                $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
                $table->dropForeing('categories_id_foreing');
                $table->string('name');
                $table->decimal('price');
                $table->integer('quantity');
                $table->string('description');
                $table->string('path');
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
        Schema::drop('products');
    }
}
