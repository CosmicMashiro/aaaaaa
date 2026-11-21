<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Ari Rivera', 'email' => 'ari.rivera@example.com', 'password' => Hash::make('sample-password'), 'role' => 'Administrator', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kai Lim', 'email' => 'kai.lim@example.com', 'password' => Hash::make('sample-password'), 'role' => 'Manager', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sam Dela Cruz', 'email' => 'sam.delacruz@example.com', 'password' => Hash::make('sample-password'), 'role' => 'Cashier', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jamie Flores', 'email' => 'jamie.flores@example.com', 'password' => Hash::make('sample-password'), 'role' => 'Cashier', 'is_active' => false, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alex Navarro', 'email' => 'alex.navarro@example.com', 'password' => Hash::make('sample-password'), 'role' => 'Inventory Clerk', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
