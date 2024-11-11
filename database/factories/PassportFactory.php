<?php

namespace Database\Factories;

use App\Models\Passport;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassportFactory extends Factory
{
    protected $model = Passport::class;

    public function definition()
    {
        return [
            'first_name_a' => $this->faker->firstName(),
            'father_name_a' => $this->faker->firstName(),
            'g_father_name_a' => $this->faker->firstName(),
            'last_name_a' => $this->faker->lastName(),
            'first_name_e' => $this->faker->firstName(),
            'father_name_e' => $this->faker->firstName(),
            'g_father_name_e' => $this->faker->firstName(),
            'last_name_e' => $this->faker->lastName(),
            'mother_name' => $this->faker->name('female'),
            'birth_date' => $this->faker->date(),
            'birth_place' => $this->faker->city(),
            'nationalty' => $this->faker->country(),
            'issue_date' => $this->faker->date(),
            'issue_end' => $this->faker->date(),
            'issue_place' => $this->faker->city(),
            'passport_number' => $this->faker->unique()->numerify('########'),
            'photo' => $this->faker->imageUrl(),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'national_number' => $this->faker->unique()->numerify('##########'),
        ];
    }
}