<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coin;

class CoinFactory extends Factory
{
    protected $model = Coin::class;

    protected $coinNames = ['USD', 'EUR', 'GBP', 'JPY', 'CAD', 'AUD', 'CHF', 'CNY', 'SYR', 'RUB', 'INR'];

    public function definition()
    {
        static $index = 0;
        return [
            'coin_name' => $this->coinNames[$index++ % count($this->coinNames)],
            'coin_price' => $this->faker->randomFloat(2, 0.1, 100),
        ];
    }
}