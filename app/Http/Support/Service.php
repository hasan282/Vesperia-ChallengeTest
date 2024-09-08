<?php

namespace App\Http\Support;

use App\Http\Libraries\AdminLTE;

class Service
{
    public static function plugin()
    {
        return new AdminLTE;
    }
}
