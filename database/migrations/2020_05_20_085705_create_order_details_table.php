<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('ordet_id');
            $table->string('ordet_order_ref_id');
            $table->string('ordet_menu_name');
            $table->text('ordet_menu_description');
            $table->text('ordet_user_address');
            $table->integer('ordet_quantity');
            $table->float('ordet_unit_price', 11, 2);
            $table->float('ordet_total_price', 11, 2);
            $table->dateTime('ordet_created_at');
            $table->dateTime('ordet_updated_at');
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
}
