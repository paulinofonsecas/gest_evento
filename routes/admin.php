<?php

use App\Http\Controllers\AdminCatalogoController;
use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\EventoController;
use App\Models\Evento;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    $eventos = Evento::all();
    return view('admin/dashboard', [
        'eventos' => $eventos,
    ]);
})->middleware(['auth', 'verified', 'can:admin'])->name('admin_dashboard');

Route::resource('/admin/aparelho', AparelhoController::class)->middleware(['auth', 'verified', 'can:admin']);

Route::resource('/admin/eventos', EventoController::class)->middleware(['auth', 'verified', 'can:admin']);

Route::get('/admin/aparelho/edit/{id}', [AparelhoController::class, 'edit'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_edit_aparelho');

Route::post('/admin/aparelho/update/{id}', [AparelhoController::class, 'update'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_update_aparelho');

Route::get('/admin/aparelho/delete/{id}', [AparelhoController::class, 'destroy'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_delete_aparelho');

Route::get('/admin/catalogo', [AdminCatalogoController::class, 'index'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_catalogo');
