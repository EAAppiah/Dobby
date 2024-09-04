<?php

namespace Database\Factories;

use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\facility>
 */
class FacilityFactory extends Factory
{
    protected $model = Facility::class;

    public function definition(): array
    {
        $password = $this->generateReadablePassword();

        return [
            'name' => fake()->company(),
            'phone' => $this->faker->unique()->numerify('##########'),
            'location' => fake()->streetAddress(),
            'password' => Hash::make($password),
            'plain_password' => $password,
        ];
    }


    private function generateReadablePassword(): string
    {
        $words = $this->faker->words(2);
        $number = $this->faker->numberBetween(10, 99);
        $special = $this->faker->randomElement(['!', '@', '#', '$', '%', '^', '&', '*']);

        $words = array_map('ucfirst', $words);

        return implode('', $words) . $number . $special;
    }


}
