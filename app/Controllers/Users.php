<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'jsantos', 'full_name' => 'Benedict Torres', 'role' => 'Administrator'],
            ['username' => 'rdelacruz', 'full_name' => 'Ramon Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'lreyes', 'full_name' => 'Liza Reyes', 'role' => 'Cashier'],
            ['username' => 'mvillanueva', 'full_name' => 'Miguel Villanueva', 'role' => 'Inventory Clerk'],
            ['username' => 'kbautista', 'full_name' => 'Kim Bautista', 'role' => 'Manager'],
        ];

        $data = [
            'title' => 'User Accounts | POS System',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}