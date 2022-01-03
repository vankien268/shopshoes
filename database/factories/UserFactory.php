<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'verified' => rand(0, 1),
            'password' => bcrypt("123"),
            "avatar_path" => $this->faker->imageUrl(480, 480)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($user) {
            // Gán quyền khách hàng cho user
            $user->roles()->attach(3);
        });
    }
}
