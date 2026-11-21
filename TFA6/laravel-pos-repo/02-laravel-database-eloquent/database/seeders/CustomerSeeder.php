<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '+63 917 555 0101'],
            ['full_name' => 'Noah Reyes', 'email' => 'noah.reyes@example.com', 'phone' => '+63 917 555 0102'],
            ['full_name' => 'Leah Cruz', 'email' => 'leah.cruz@example.com', 'phone' => '+63 917 555 0103'],
            ['full_name' => 'Ethan Garcia', 'email' => 'ethan.garcia@example.com', 'phone' => '+63 917 555 0104'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '+63 917 555 0105'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                ['full_name' => $customer['full_name'], 'phone' => $customer['phone']],
            );
        }
    }
}
