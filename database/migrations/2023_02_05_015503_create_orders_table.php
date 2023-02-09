<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id("order_id");
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('account_id')->on('account')->onDelete("cascade");
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('item_id')->on('item')->onDelete("cascade");
            $table->integer("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
