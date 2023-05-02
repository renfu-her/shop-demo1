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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->comment('商品ID');
            $table->bigInteger('member_id')->comment('使用者ID');
            $table->string('merchant_order_no')->comment('order no');
            $table->integer('amount')->default(0)->comment('總價');
            $table->integer('discount')->default(0)->comment('折價');
            $table->integer('tax')->default(0)->comment('稅率');
            $table->integer('shipping')->default(0)->comment('運費');
            $table->string('status')->default(0)->comment('狀態');
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
        Schema::dropIfExists('shoping_carts');
    }
};
