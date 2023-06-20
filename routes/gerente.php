<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index');
Route::get('/administradores/create', [AdministradorController::class, 'adicionarAdmin'])->name('administradores.adicionarAdmin');
Route::post('/administradores/store', [AdministradorController::class, 'storeAdmin'])->name('administradores.storeAdmin');
Route::post('/administradores/promover/{id}', [AdministradorController::class, 'promover'])->name('administradores.promover');
Route::post('/administradores/despromover/{id}', [AdministradorController::class, 'despromover'])->name('administradores.despromover');
Route::get('/administradores/remover/{id}', [AdministradorController::class, 'eliminarAdmin'])->name('administradores.eliminarAdmin');
Route::get('/administradores/pesquisar/{search}', [AdministradorController::class, 'pesquisarUsuariosAdmin'])->name('administradores.pesquisarUsuariosAdmin');
