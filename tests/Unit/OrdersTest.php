<?php

namespace Tests\Unit;

use App\Models\Currency;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;


class OrdersTest extends TestCase
{
    public function testAddItemToCart()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user, [User::TYPE_SHOP_ADMIN]);

        $product = new Product([
            'name' => 'Test Product',
            'price' => '1000',
            'stock' => '1',
        ]);

        $product->currency()->associate(Currency::first());
        $product->save();

        $response = $this->post(route('add-product-to-cart'), [
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        $product->delete();

        $response->assertStatus(200);
    }

    public function testItemNotAvailable()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user, [User::TYPE_SHOP_ADMIN]);

        $product = new Product([
            'name' => 'Test Product',
            'price' => '1000',
            'stock' => '1',
        ]);
        $product->currency()->associate(Currency::first());
        $product->save();

        $response = $this->post(route('add-product-to-cart'), [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);
        $product->delete();
        $response->assertStatus(406);
    }


    public function testAdminSeeOrders()
    {
        $user = User::factory()->create(['type' => User::TYPE_SHOP_ADMIN]);
        Sanctum::actingAs($user);

        User::factory(5)->create();
        Order::factory(30)->create();

        $response = $this->get(route('all-orders'));

        $this->assertEquals($response->original->count(), Order::count());
    }


    public function testUserSeeOrders()
    {
        User::factory(5)->create();
        Order::factory(30)->create();

        $user = User::whereType(User::TYPE_USER)->first();

        Sanctum::actingAs($user);

        $response = $this->get(route('all-orders'));

        $this->assertEquals($response->original->count(), Order::whereUserId($user->id)->count());
    }
}
