<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Helper;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    /**
     * Custom view function, will return removed new line if env is production.
     * @return string rendered view, no new line if production env
     */
    protected function view(string $view, array $data = [], array $mergeData = []): string
    {
        $newLineRemove = false;
        // $newLineRemove = env('APP_ENV') == 'production';

        $webView = View::make($view, $data, $mergeData)->render();

        if ($newLineRemove) {
            return Helper::GapReplace($webView);
        }
        return $webView;
    }
}
