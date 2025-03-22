<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\SonoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dados', [ImcController::class, 'dadosimc']);
Route::get('/imc', [ImcController::class, 'imc']);

Route::get('/formssono', [SonoController::class, 'dadossono']);
Route::get('/sono', [SonoController::class, 'sono']);




