<?php

use App\Http\Controllers\AdminCatalogoController;
use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventoController;
use App\Models\Evento;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [DashboardController::class, 'buildAdminDashboard'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_dashboard');

Route::resource('/admin/aparelhos', AparelhoController::class)->middleware(['auth', 'verified', 'can:admin']);

Route::resource('/admin/eventos', EventoController::class)->middleware(['auth', 'verified', 'can:admin']);

Route::get('/admin/aparelhos/edit/{id}', [AparelhoController::class, 'edit'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_edit_aparelho');

Route::post('/admin/aparelhos/update/{id}', [AparelhoController::class, 'update'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_update_aparelho');

Route::get('/admin/aparelhos/delete/{id}', [AparelhoController::class, 'destroy'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_delete_aparelho');

Route::get('/admin/catalogo', [AdminCatalogoController::class, 'index'])->middleware(['auth', 'verified', 'can:admin'])->name('admin_catalogo');
