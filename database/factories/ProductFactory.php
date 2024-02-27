<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Collection;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {   
        $collection = collect([1, 2, 3, 4, 5]);
        $rand = $collection->random();
 
        return [
            'user_id' => User::factory(),
            'name' => fake()->name(),
            'qty' => $rand,
            'price' => $rand,
            'description' => $fake()->paragraph(),
        ];
    }
}
