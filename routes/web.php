<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card', function () {
    return view('card', ['name' => 'Luciano']);
});

Route::get('/card/{id}', [CardController::class, 'show']);