<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->comment('商品ID');
            $table->integer('quantity')->default(0)->comment('數量');
            $table->integer('price')->default(0)->comment('價格');
            $table->integer('amount')->default(0)->comment('總價');
            $table->integer('discount')->default(0)->comment('折價');
            $table->integer('tax')->default(0)->comment('稅率');
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
        Schema::dropIfExists('order_details');
    }
};
