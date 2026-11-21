<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary source for this exercise; each row is a plain PHP array.
        $customers = [
            ['id' => 'C-1001', 'name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '+63 917 555 0101', 'status' => 'Active', 'loyalty_points' => 240],
            ['id' => 'C-1002', 'name' => 'Noah Reyes', 'email' => 'noah.reyes@example.com', 'phone' => '+63 917 555 0102', 'status' => 'Active', 'loyalty_points' => 85],
            ['id' => 'C-1003', 'name' => 'Leah Cruz', 'email' => 'leah.cruz@example.com', 'phone' => '+63 917 555 0103', 'status' => 'Inactive', 'loyalty_points' => 510],
            ['id' => 'C-1004', 'name' => 'Ethan Garcia', 'email' => 'ethan.garcia@example.com', 'phone' => '+63 917 555 0104', 'status' => 'Active', 'loyalty_points' => 132],
            ['id' => 'C-1005', 'name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '+63 917 555 0105', 'status' => 'Active', 'loyalty_points' => 390],
        ];

        return view('customers.index', compact('customers'));
    }
}
