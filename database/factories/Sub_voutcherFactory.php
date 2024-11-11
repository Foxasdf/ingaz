<?php

namespace Database\Factories;

use App\Models\Sub_voutcher;
use App\Models\Voutcher;
use App\Models\Coin;
use App\Models\Passport;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sub_voutcherFactory extends Factory
{
    protected $model = Sub_voutcher::class;

    public function definition()
    {
        return [
            'vouchter' => Voutcher::factory(),
            'passport' => function () {
                return Passport::inRandomOrder()->first()->passport_number ?? Passport::factory()->create()->passport_number;
            },
            'suplyer' => $this->faker->company,
            'cost' => $this->faker->randomFloat(2, 100, 10000),
            'cost_coin' => function () {
                return Coin::inRandomOrder()->first()->coin_id;
            },
            'custumer' => $this->faker->name,
            'sell' => $this->faker->randomFloat(2, 100, 10000),
            'sell_coin' => function () {
                return Coin::inRandomOrder()->first()->coin_id;
            },
            'recive_date' => $this->faker->date(),
            'send_date' => $this->faker->date(),
            'finish_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'operatin_type' => $this->faker->word,
        ];
    }
}