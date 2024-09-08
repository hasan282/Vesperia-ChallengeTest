<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        return $this->view('home.main');
    }

    public function trial()
    {
        $data = [
            'title' => 'Kejadian Risiko Operasional'
        ];
        $this->plugin->set('scrollbar');
        return $this->view('layout.admin', $data);
    }
}
