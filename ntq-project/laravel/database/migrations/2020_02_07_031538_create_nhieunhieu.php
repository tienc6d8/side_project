<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhieunhieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('name');
            $table->timestamps();
        });
        Schema::create('attr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('name');
            $table->timestamps();
        });
        Schema::create('attr_has_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('attr_id')->unsigned();
            $table->foreign('attr_id')->references('id')->on('attr');
            $table->bigInteger('sanpham_id')->unsigned();
            $table->foreign('sanpham_id')->references('id')->on('sanpham');
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
        Schema::dropIfExists('nhieunhieu');
    }
}
