<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rate');
            $table->unsignedBigInteger('bureau_id');
            $table->unsignedBigInteger('mode_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('bureau_id')->references('id')->on('bureaus');
            $table->foreign('mode_id')->references('id')->on('modes');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('rates');
    }
}
