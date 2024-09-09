<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Helper;
use Barryvdh\Debugbar\Facades\Debugbar;

class Home extends Controller
{
    public function index()
    {
        Debugbar::info(Helper::submission());

        return $this->view('login.main', ['title' => 'Login']);
    }
}
