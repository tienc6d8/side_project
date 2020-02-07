<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_sp',100);
            $table->timestamps();
        });
        Schema::create('info_sp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('price_sp');
            $table->string('nha_sx');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('product_sp');
            $table->timestamps();
        });
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_nguoidung');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('product_sp');
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
        Schema::dropIfExists('relation');
    }
}
