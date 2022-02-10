<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignIdFor(User::class)->constrained();
            $table->enum('status',[\App\Models\Order::STATUS_CREATED,\App\Models\Order::STATUS_ADDRESS_SAVED,\App\Models\Order::STATUS_COMPLETE]);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
