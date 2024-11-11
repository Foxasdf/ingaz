<?php

namespace Database\Factories;

use App\Models\Voutcher_type;
use Illuminate\Database\Eloquent\Factories\Factory;

class Voutcher_typeFactory extends Factory
{
    protected $model = Voutcher_type::class;

    public function definition()
    {
        return [
            'voutcher_type' => $this->faker->unique()->word(),
        ];
    }
}