<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Temporary source for this exercise; each row is a plain PHP array.
        $users = [
            ['id' => 'U-2001', 'name' => 'Ari Rivera', 'email' => 'ari.rivera@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 'U-2002', 'name' => 'Kai Lim', 'email' => 'kai.lim@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 'U-2003', 'name' => 'Sam Dela Cruz', 'email' => 'sam.delacruz@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 'U-2004', 'name' => 'Jamie Flores', 'email' => 'jamie.flores@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 'U-2005', 'name' => 'Alex Navarro', 'email' => 'alex.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
        ];

        return view('users.index', compact('users'));
    }
}
