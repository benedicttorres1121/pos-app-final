<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Mark Villanueva', 'email' => 'mark.villanueva@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Katrina Bautista', 'email' => 'katrina.bautista@example.com', 'phone' => '0921-567-8901'],
        ];

        $data = [
            'title' => 'Customer Accounts | POS System',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}