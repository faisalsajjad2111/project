<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shop_id')->unsigned();
            $table->integer('Month');
            $table->integer('date_Received');
            $table->integer('Rent_Received');
            $table->integer('Rent_Renewing');
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
        Schema::dropIfExists('shop_rents');
    }
}
