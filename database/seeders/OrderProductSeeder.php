<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use rand;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders=Order::inRandomOrder()->take(5)->get();
        foreach($orders as $order)
        {
            // $no_of_products = $this->faker->numberBetween(1,5);
            $no_of_products=random_int(1,5);

            // $no_of_products=fake()->numberBetween(1,5);
            $products=Product::inRandomOrder()->take($no_of_products)->get();
            {
                foreach($products as $product)
                {
                    $order->products()->attach($product);
                }
            }
        }
    }
}
