<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopSoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_solds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->integer('shop_id')->unsigned(); 
            $table->integer('total_cost');
           $table->datetime('application_date');
            $table->integer('advanced_Checque_cash');
            $table->float('percent');
           $table->integer('checque no');
            $table->integer('installment');
            $table->integer('monthly');
            $table->integer('quarterly');
            $table->integer('other Chargers');
            $table->string('remarks');

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
        Schema::dropIfExists('shop_solds');
    }
}
