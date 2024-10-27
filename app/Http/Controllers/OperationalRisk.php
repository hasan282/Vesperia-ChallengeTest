<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Helper;
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

    public function add()
    {
        $data = [
            'title' => 'Tambah Detail Risiko Operasional',
            'bread' => [
                'Risiko Operasional|operational-risk',
                'Tambah Data Baru'
            ],
            'subms' => Helper::submission()[0]
        ];
        $this->plugin->set('scrollbar|icheck');
        return $this->view('operational.add', $data);
    }
}
