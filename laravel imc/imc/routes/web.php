<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('dados');
});

Route::get('/imc', [ImcController::class, 'imc']);