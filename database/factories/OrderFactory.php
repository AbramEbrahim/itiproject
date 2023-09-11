<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user=User::inRandomOrder()->first();
        if(!$user)
        {
            $user=User::factory()->create();
        }
        return [
            // 'price'=>fake()->numberBetween(100,1000),
            
            'price' => $this->faker->numberBetween(100,1000),
            'user_id'=>$user->id
            
        ];
    }
}
