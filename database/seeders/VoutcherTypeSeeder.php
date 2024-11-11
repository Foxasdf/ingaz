<?php

namespace Database\Seeders;

use App\Models\Voutcher_type;
use Illuminate\Database\Seeder;

class VoutcherTypeSeeder extends Seeder
{
    public function run()
    {
        $voucherTypes = [
            'Cash',
            'Credit Card',
            'Debit Card',
            'Check',
            'Bank Transfer',
            'PayPal',
            'Gift Card',
            'Store Credit',
        ];

        foreach ($voucherTypes as $type) {
            Voutcher_type::create(['voutcher_type' => $type]);
        }

        // If you want to add more random types, uncomment the following line:
        // Voutcher_type::factory()->count(5)->create();
    }
}