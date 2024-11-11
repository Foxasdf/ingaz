<?php

namespace Database\Seeders;

use App\Models\Voutcher;
use Illuminate\Database\Seeder;

class VoutcherSeeder extends Seeder
{
    public function run()
    {
        Voutcher::factory()->count(50)->create();
    }
}