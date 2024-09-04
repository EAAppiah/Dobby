<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $password = $this->generateReadablePassword();

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'email_verified_at' => now(),
            'phone' => $this->faker->unique()->numerify('##########'),
            'password' => Hash::make($password),
            'plain_password' => $password,
            'user_type' => $this->faker->randomElement(['user', 'facility']),
        ];
    }

    /**
     * Generate a readable but strong password.
     *
     * @return string
     */
    private function generateReadablePassword(): string
    {
        $words = $this->faker->words(2);
        $number = $this->faker->numberBetween(10, 99);
        $special = $this->faker->randomElement(['!', '@', '#', '$', '%', '^', '&', '*']);

        $words = array_map('ucfirst', $words);

        return implode('', $words) . $number . $special;
    }

    /**
     * Indicate that the user has changed their password.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */


    /**
     * Indicate that the user is a facility user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function facility()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_type' => 'facility',
            ];
        });
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}