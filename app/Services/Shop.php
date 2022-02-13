<?php

namespace App\Services;

use App\Actions\Order\CompleteOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Shop
{
    private  Collection $unavailableProducts;

    public function __construct()
    {
        $this->unavailableProducts = collect();
    }

    public function addProductToCart(Product $product, $qty)
    {
        $order = Order::firstOrCreate(['status' => Order::STATUS_CREATED], ['user_id' => Auth::id()]);

        $orderProduct = $order->products()->newPivotQuery()->where('product_id', '=', $product->id)->first();
        $isAvailable = empty($orderProduct) ? $product->stock >= $qty : $orderProduct->quantity + $qty <= $product->stock;

        abort_if(!$isAvailable, 406, 'Item quantity not available!');

        //Return json if we don't want exception
        if (!empty($orderProduct)) {
            $order->products()->updateExistingPivot($product->id,['quantity'=>($orderProduct->quantity + $qty)]);
        }else{
            $order->products()->attach($product,['quantity'=>$qty]);
        }

        return $order->id;
    }
    public function proceedToCheckout(Order $order, $address)
    {

        $order->products->each(function ($product){
            if($product->stock < $product->pivot->quantity){
                $this->unavailableProducts->push( $product);
            }
        });

        if($this->unavailableProducts->isNotEmpty()){
            $unavailableIds = $this->unavailableProducts->pluck('id')->toArray();
            response()->jsonError('Products unavailable',406,$unavailableIds)->send();
        }

        DB::transaction(function ()use($order){
            $order->status = Order::STATUS_ADDRESS_SAVED;
            $order->save();

            $order->products->each(function ($order){
                $order->stock = $order->stock - $order->pivot->quantity;
                $order->save();
            });

        });
    }
    public function completeOrder(Order $order)
    {
        $completeOrderAction = new CompleteOrder;
        $completeOrderAction($order);
    }
}
