<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tb', function (Blueprint $table) {
            $table->increments('o_id');
            $table->string('invoice_id');
            $table->integer('p_id')->unsigned();
            $table->string('quantity');
            $table->double('b_priece' , 8,2);
            $table->double('mrp_price', 8,2);
            $table->double('s_price', 8,2);
            $table->tinyInteger('status')->comment('0 = Cencel , 1 = Deliverd , 2= Request Pending , 3= Processing , 4= Return');
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
        //
    }
}
