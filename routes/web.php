<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('raiz');

Route::controller(PessoaController::class)->group(function () {
    Route::get('/create', 'create')->name('create.pessoa');
    // Route::post('/', '');
});