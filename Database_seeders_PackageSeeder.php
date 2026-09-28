<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Comprehensive Health Shield',
                'type' => 'Health Insurance',
                'description' => 'Complete medical coverage including hospitalization and emergency care.',
                'price' => 1500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Full Coverage Auto Protect',
                'type' => 'Auto Insurance',
                'description' => 'Comprehensive vehicle insurance against theft, collision, and third-party damages.',
                'price' => 850.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Secure Home & Property',
                'type' => 'Property Insurance',
                'description' => 'Total protection for home structure and personal belongings against disaster.',
                'price' => 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
