<?php

namespace Database\Seeders;

use App\Models\Journal;
use App\Models\Coin;
use App\Models\Account;
use App\Models\Voutcher;
use App\Models\Passport;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    public function run()
    {
        // Ensure coins exist
        if (Coin::count() == 0) {
            Coin::factory()->count(11)->create(); // Create all 11 unique coins
        }

        // Ensure accounts exist
        if (Account::count() == 0) {
            Account::factory()->count(20)->create();
        }

        // Ensure voutchers exist
        if (Voutcher::count() == 0) {
            Voutcher::factory()->count(20)->create();
        }

        // Ensure passports exist
        if (Passport::count() == 0) {
            Passport::factory()->count(20)->create();
        }

        Journal::factory()->count(50)->create();
    }
}