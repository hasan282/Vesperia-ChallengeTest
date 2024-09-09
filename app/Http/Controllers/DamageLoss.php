<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DamageLoss extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Detail Kerugian'
        ];
        $this->plugin->set('scrollbar');
        return $this->view('damage.main', $data);
    }
}
