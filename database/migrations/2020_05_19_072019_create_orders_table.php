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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('order_user_id');
            $table->string('order_menu_name');
            $table->text('order_menu_description');
            $table->text('order_user_address');
            $table->integer('order_quantity');
            $table->float('order_unit_price', 11, 2);
            $table->float('order_total_amount', 11, 2);
            $table->dateTime('order_created_at');
            $table->dateTime('order_updated_at');
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
