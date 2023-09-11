<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100,1000),
            'availability' => $this->faker->randomElement(['available', 'unavailable']),
            'description' => $this->faker->name(),
            'image' => 'https://media.ldlc.com/ld/products/00/05/88/62/LD0005886202_1.jpg',
            'category_id'=>Category::inRandomOrder()->first()->id

            // 'name'=>fake()->name(),
            // 'price'=>fake()->numberBetween(100,1000),
            // 'availability' => fake()->randomElement(['available', 'unavailable']),
            

        ];
    }
}
