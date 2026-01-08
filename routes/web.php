<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('raiz');

Route::fallback(function () {
    return view('fallback');
});

Route::controller(PessoaController::class)->group(function () {
    
    // Index
    Route::get('/pessoa', 'index')->name('pessoa.index');
    
    // Create e Store
    Route::get('/pessoa/create/{mensagem?}', 'create')->name('pessoa.create');
    Route::post('/pessoa/store', 'store')->name('pessoa.store');

    // Edit e Update
    Route::get('/pessoa/{id}/edit/{mensagem?}', 'edit')->name('pessoa.edit');
    Route::post('/pessoa/update', 'update')->name('pessoa.update');

    // Destroy
    Route::get('/pessoa/delete/{id}', 'destroy')->name('pessoa.destroy');
});

Route::view('/docs', 'docs.index')->name('docs.index');