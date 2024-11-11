<?php

namespace Database\Factories;

use App\Models\Journal;
use App\Models\Account;
use App\Models\Coin;
use App\Models\Voutcher;
use App\Models\Passport;
use Illuminate\Database\Eloquent\Factories\Factory;

class JournalFactory extends Factory
{
    protected $model = Journal::class;

    public function definition()
    {
        return [
            'acount_dept' => Account::factory(),
            'acount_cridit' => Account::factory(),
            'cridit' => $this->faker->randomFloat(2, 0, 10000),
            'dept' => $this->faker->randomFloat(2, 0, 10000),
            'coin' => function () {
                return Coin::inRandomOrder()->first()->coin_id ?? Coin::factory()->create()->coin_id;
            },
            'coin_price' => $this->faker->randomFloat(2, 0, 1000),
            'operation_date' => $this->faker->date(),
            'memo' => $this->faker->sentence(),
            'voutcher_id' => Voutcher::factory(),
            'passport_id' => Passport::factory(),
        ];
    }
}