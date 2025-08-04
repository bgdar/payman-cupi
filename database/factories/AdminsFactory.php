<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\admins;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admins>
 */
class AdminsFactory extends Factory
{
   protected $model = admins::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name(),
            // password di ubah ke hash
            // "password"=>bcrypt($this->faker->password()),
            "password"=>$this->faker->password(),
            "email"=> $this->faker->email(),
            "phone"=> $this->faker->phoneNumber(),
            "address"=> $this->faker->address(),
        ];
    }
}
