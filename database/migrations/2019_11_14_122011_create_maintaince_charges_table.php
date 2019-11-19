<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintainceChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintaince_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->integer('Shop_no');
            $table->string('floor');
            $table->integer('Sqft Size');
           $table->string('Setup');
            $table->integer('Bill No');
            $table->integer('MaintCharges');
            $table->integer('Total');
            $table->integer('Reciieved');
            $table->integer('Balance Reciieved');
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
        Schema::dropIfExists('maintaince_charges');
    }
}
