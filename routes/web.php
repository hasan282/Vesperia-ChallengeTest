<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [Home::class, 'index']
);

Route::get(
    '/incidents',
    [Home::class, 'trial']
);
