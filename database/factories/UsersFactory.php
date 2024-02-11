<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'firstname' => $this->faker->firstName,
//            'lastname' => $this->faker->lastName,
//            'phone' => $this->faker->phoneNumber,
//            'email' => $this->faker->email,
            'firstname' => 'Yelyzaveta',
            'lastname' => 'Hryhorenko',
            'phone' => "380955945455",
            'email' => 'lizok@gmail.com',
        ];
    }
}
