<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return redirect()->route('obat.index');
});

Route::resource('obat', ObatController::class);