<?php

use App\Http\Controllers\DamageLoss;
use App\Http\Controllers\Home;
use App\Http\Controllers\OperationalRisk;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [Home::class, 'index']
);

Route::get(
    '/operational-risk',
    [OperationalRisk::class, 'index']
);

Route::get(
    '/damage-loss',
    [DamageLoss::class, 'index']
);
