<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition()
    {
        return [
            'account_name' => $this->faker->company,
            'trading' => $this->faker->boolean,
            'visa_company' => $this->faker->boolean,
            'hotel_company' => $this->faker->boolean,
            'airline_company' => $this->faker->boolean,
            'transport_company' => $this->faker->boolean,
            'ship_company' => $this->faker->boolean,
            'insurance_company' => $this->faker->boolean,
            'customer' => $this->faker->boolean,
            'employee' => $this->faker->boolean,
            'box' => $this->faker->boolean,
            'woner' => $this->faker->boolean,
            'persantage' => $this->faker->numberBetween(0, 100),
        ];
    }
}
