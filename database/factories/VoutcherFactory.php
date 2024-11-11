<?php

namespace Database\Factories;

use App\Models\Voutcher;
use App\Models\Voutcher_type;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoutcherFactory extends Factory
{
    protected $model = Voutcher::class;

    public function definition()
    {
        return [
            'voutcher_name' => $this->faker->name,
            'voutcher_number1' => $this->faker->unique()->numerify('V-######'),
            'voutcher_number2' => $this->faker->unique()->numerify('V-######'),
            'address' => $this->faker->address,
            'voutcher_date' => $this->faker->date(),
            'voucher_phone' => $this->faker->phoneNumber,
            'account' => $this->faker->word,
            'voutcher_type' => function () {
                return Voutcher_type::inRandomOrder()->first()->type_id ?? Voutcher_type::factory()->create()->type_id;
            },
        ];
    }
}