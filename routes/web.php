<?php

use App\Http\Controllers\DamageLoss;
use App\Http\Controllers\Home;
use App\Http\Controllers\OperationalRisk;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [Home::class, 'index']
);

Route::controller(OperationalRisk::class)->group(function () {

    Route::get('/operational-risk', 'index');
    Route::get('/operational-risk/add', 'add');
});

Route::get(
    '/damage-loss',
    [DamageLoss::class, 'index']
);
