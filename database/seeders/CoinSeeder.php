<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    public function run()
    {
        $coinNames = ['USD', 'EUR', 'GBP', 'JPY', 'CAD', 'AUD', 'CHF', 'CNY', 'SYR', 'RUB', 'INR'];
        foreach ($coinNames as $name) {
            Coin::factory()->create(['coin_name' => $name]);
        }
    }
}