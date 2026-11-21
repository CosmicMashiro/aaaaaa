<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '+63 917 555 0101', 'company' => 'Northstar Market', 'loyalty_points' => 240, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noah Reyes', 'email' => 'noah.reyes@example.com', 'phone' => '+63 917 555 0102', 'company' => 'Reyes Trading', 'loyalty_points' => 85, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leah Cruz', 'email' => 'leah.cruz@example.com', 'phone' => '+63 917 555 0103', 'company' => null, 'loyalty_points' => 510, 'is_active' => false, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ethan Garcia', 'email' => 'ethan.garcia@example.com', 'phone' => '+63 917 555 0104', 'company' => 'Garcia Supplies', 'loyalty_points' => 132, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '+63 917 555 0105', 'company' => null, 'loyalty_points' => 390, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
