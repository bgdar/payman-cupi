<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'judul_product'=>$this->faker->word(),
            'deskripsi'=>$this->faker->sentence(),
            'harga'=>$this->faker->numberBetween(),
            'on_sale'=>$this->faker->randomNumber(5),

            //
        ];
    }
}
