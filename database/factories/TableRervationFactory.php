<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TableRervation>
 */
class TableRervationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name(),
            "email"=> $this->faker->unique()->safeEmail(),
            "phone"=> $this->faker->phoneNumber(),
            "reservation_date"=> $this->faker->date(),
            "reservation_time"=> $this->faker->time(),
            "guest_count"=> $this->faker->numberBetween(1, 10),
            "notes"=> $this->faker->optional()->text(),
            "store_id"=> $this->faker->numberBetween(1, 5), //
            "status"=> $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
