<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'arivera', 'full_name' => 'Ari Rivera'],
            ['username' => 'klim', 'full_name' => 'Kai Lim'],
            ['username' => 'sdelacruz', 'full_name' => 'Sam Dela Cruz'],
            ['username' => 'jflores', 'full_name' => 'Jamie Flores'],
            ['username' => 'anavarro', 'full_name' => 'Alex Navarro'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name']],
            );
        }
    }
}
