<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationalRisk extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kejadian Risiko Operasional'
        ];
        $this->plugin->set('scrollbar');
        return $this->view('operational.main', $data);
    }
}
