<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dados', [ImcController::class, 'dadosimc']);
Route::get('/imc', [ImcController::class, 'imc']);

Route::get('/formssono', [SonoController::class, 'dadossono']);
Route::get('/sono', [SonoController::class, 'sono']);


Route::get('/formsviagem', [ViagemController::class, 'dadosgasto']);
Route::get('/gasto', [ViagemController::class, 'gasto']);

