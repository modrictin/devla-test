<?php

namespace App\Actions\Order;

use App\Models\Order;

class CompleteOrder
{
    public function __invoke(Order $order)
    {
        $order->status = Order::STATUS_COMPLETE;
        $order->save();
    }
}
