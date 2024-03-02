<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $collection = collect(['I', 'B']);
        $type = $collection->random();
        return [

            'name' => fake()->name(),
            'type' => $type,
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->title(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postCode(),
        ];
    }
}
