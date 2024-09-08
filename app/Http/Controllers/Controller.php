<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Helper;
use App\Http\Support\Service;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = Service::plugin();

        $this->plugin->set([
            'basic',
            'fontawesome'
        ]);
    }

    /**
     * Custom view function, will return removed new line if env is production.
     * @return string rendered view, no new line if production env
     */
    protected function view(string $view, array $data = []): string
    {
        $newLineRemove = env('APP_ENV') == 'production';

        $webView = View::make($view, $data, [

            'getPlugins' => $this->plugin->get()

        ])->render();

        return $newLineRemove ? Helper::GapReplace($webView) : $webView;
    }
}
