<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parent_id' => 0,
            'firstname' => $this->faker->firstName,
            'lastname'  => $this->faker->lastName,
            'cellphone' => $this->faker->phoneNumber,
            'email'     => $this->faker->email,
            'password'  => Hash::make('123123123'),
            'status'    => 'active',
        ];
    }
}
