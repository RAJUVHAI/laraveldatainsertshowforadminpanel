<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class ProductTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_name' , 20);
            $table->integer('p_catagory');
            $table->string('image');
            $table->string('short_desc', 255);
            $table->string('long_desc' , 500);
            $table->integer('quantity');
            $table->double('b_price', 8,2);
            $table->double('mrp_price', 8,2);
            $table->double('s_price', 8,2);
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
