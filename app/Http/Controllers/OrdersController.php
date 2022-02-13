<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Shop;


class OrdersController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|numeric',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);

        $orderId = Shop::addProductToCart($product, $request->quantity);

        //Return order id for the frontend if needed (demo only)
        return response()->jsonSuccess('Product added to users cart', ['order_id' =>$orderId]);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'order_id' => 'required|numeric',
            'address' => 'required|min:3'
        ]);

        //Find only new orders so we dont process another order
        //We can return the error if we want
        $order = Order::new()->with('products')->findOrFail($request->order_id);

        Shop::proceedToCheckout($order,$request->address);

        return response()->jsonSuccess('Adress saved');
    }

    public function complete(Request $request)
    {
        $request->validate([
            'order_id' => 'required|numeric',
        ]);

        $order = Order::processed()->findOrFail($request->order_id);

        Shop::completeOrder($order,$request->address);

        return response()->jsonSuccess('Order completed');
    }

    public function orders()
    {
        if(\Auth::user()->type === User::TYPE_SHOP_ADMIN){
            $orderCollection = Order::with('products')->withCount('products')->get();
        }else{
            $orderCollection = \Auth::user()->orders()->with('products')->withCount('products')->get();
        }

        return OrderResource::collection($orderCollection);
    }

}
