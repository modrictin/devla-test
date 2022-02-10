<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderProduct extends Migration
{
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignIdFor(\App\Models\Order::class);
            $table->foreignIdFor(\App\Models\Product::class);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
