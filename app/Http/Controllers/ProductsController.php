<?php

namespace App\Http\Controllers;

use App\Facades\ShopFacade;
use App\Http\Resources\ProductResource;
use App\Models\Currency;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    public function single(Product $product)
    {
        return new ProductResource($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'currency_id' => 'required|numeric'
        ]);

        $currency = Currency::findOrFail($request->currency_id);

        $product = new Product($request->all(['name', 'price', 'stock']));
        $product->currency()->associate($currency);
        $product->save();

        return response()->jsonSuccess('Product saved');
    }


}
