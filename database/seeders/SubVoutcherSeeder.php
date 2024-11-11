<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sub_voutcher;
use App\Models\Passport;
use App\Models\Coin;
use App\Models\Voutcher;

class SubVoutcherSeeder extends Seeder
{
    public function run()
    {
        // Ensure there are passports in the database
        if (Passport::count() == 0) {
            Passport::factory()->count(20)->create();
        }

        // Ensure there are coins in the database
        if (Coin::count() == 0) {
            Coin::factory()->count(11)->create(); // Create all 11 unique coins
        }

        // Ensure there are voutchers in the database
        if (Voutcher::count() == 0) {
            Voutcher::factory()->count(20)->create();
        }

        Sub_voutcher::factory()->count(50)->create();
    }
}