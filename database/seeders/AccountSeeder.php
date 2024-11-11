<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    public function run()
    {
        // Generate 50 accounts
        Account::factory()->count(50)->create();
    }
}