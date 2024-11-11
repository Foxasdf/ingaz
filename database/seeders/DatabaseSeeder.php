<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Voutcher_type;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

            $this->call([
                CoinSeeder::class,
                VoutcherTypeSeeder::class,
                AccountSeeder::class,
                VoutcherSeeder::class,
                PassportSeeder::class,
                SubVoutcherSeeder::class,
                JournalSeeder::class,

            ]);
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            
        ]);
    }
}
