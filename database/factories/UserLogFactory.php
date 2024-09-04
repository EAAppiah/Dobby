<?php

namespace Database\Factories;

use App\Models\UserLog;
use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserLogFactory extends Factory
{
    protected $model = UserLog::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $password = $this->generateReadablePassword();

        $data = [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => $this->faker->unique()->numerify('##########'),
            'password' => Hash::make($password),
            'plain_password' => $password,
            'facility_id' => Facility::factory()
        ];

        return $data;
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


}