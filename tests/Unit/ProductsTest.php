<?php

namespace Tests\Unit;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Database\Factories\UserFactory;

class ProductsTest extends TestCase
{
    public function testAdminCanAddProduct()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user, [User::TYPE_SHOP_ADMIN]);


        $response = $this->post(route('add-product'), [
            'name' => 'Strawberry',
            'price' => '1200',
            'stock' => '50',
            'currency_id' => 20
        ]);

        $response->assertStatus(200);
    }

    public function testUserCantAddProduct()
    {
        $user = User::factory()->create(['type' => User::TYPE_USER]);
        Sanctum::actingAs($user);


        $response = $this->post(route('add-product'), [
            'name' => 'Strawberry',
            'price' => '1200',
            'stock' => '50',
            'currency_id' => 20
        ]);

        $response->assertStatus(403);
    }


    public function testSeeProducts()
    {
        $user = User::factory()->create(['type' => User::TYPE_USER]);
        Sanctum::actingAs($user);

        $response = $this->get(route('get-product', ['product' => 1]));

        $response->assertStatus(200);
    }


    public function testSeeAllProducts()
    {
        $user = User::factory()->create(['type' => User::TYPE_USER]);
        Sanctum::actingAs($user);

        $response = $this->get(route('get-products'));

        $response->assertStatus(200);
    }
}
