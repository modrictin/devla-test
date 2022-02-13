<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => rand(3000,50000),
            'stock' => rand(0,32),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'currency_id' => function (){
                return Currency::inRandomOrder()->first()->id;
            },
        ];
    }
}
