<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome | POS System',
        ];

        return view('pages/landing', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | POS System',
        ];

        return view('pages/about', $data);
    }
}