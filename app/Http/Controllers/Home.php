<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        return $this->view('home/main');
    }

    public function trial()
    {
        return 'trial ';
    }
}
