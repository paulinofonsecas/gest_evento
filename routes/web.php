<?php

use App\Http\Controllers\AlugerController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\AdminCatalogoController;
use App\Models\Evento;
use App\Models\Usertype;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $user = Auth()->user();
    if ($user->type_id == Usertype::ADMIN) {
        return redirect()->route('admin_dashboard');
    } else {
        $eventos = Evento::where('data_evento', '>=', now()->format('Y-m-d'))->orderBy('data_evento', 'asc')->take(10)->get();
        return view('livewire.my-dashboard', [
            'eventos' => $eventos,
        ]);
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/catalogo', function () {
    return view('catalogo');
})->middleware(['auth', 'verified'])->name('catalogo');

Route::resource('/aparelho', AparelhoController::class)->middleware(['auth', 'verified', 'can:normal']);

Route::get('/aparelho/edit/{id}', [AparelhoController::class, 'edit'])->middleware(['auth', 'verified', 'can:normal'])->name('edit_aparelho');

Route::post('/aparelho/update/{id}', [AparelhoController::class, 'update'])->middleware(['auth', 'verified', 'can:normal'])->name('update_aparelho');

Route::get('/aparelho/delete/{id}', [AparelhoController::class, 'destroy'])->middleware(['auth', 'verified', 'can:normal'])->name('delete_aparelho');

// Route::get('/catalogo', [AdminCatalogoController::class, 'index'])->middleware(['auth', 'verified', 'can:normal'])->name('catalogo');

Route::get('/aluger', [AlugerController::class, 'index'])->middleware(['auth', 'verified', 'can:normal'])->name('aluger');

Route::group(['middleware' => ['auth', 'verified', 'can:normal']], function () {
    Route::get('/evento/create/{id}', [EventoController::class, 'create'])->name('evento.create');
    Route::post('/evento/store/{id}', [EventoController::class, 'store'])->name('evento.store');
    Route::get('/evento/edit/{id}', [EventoController::class, 'edit'])->name('evento.edit');
    Route::post('/evento/update/{id}', [EventoController::class, 'update'])->name('evento.update');
    Route::get('/evento/delete/{id}', [EventoController::class, 'destroy'])->name('evento.delete');

    // rotas customizadas
    Route::resource('evento', EventoController::class)->middleware(['auth', 'verified', 'can:normal']);
    Route::get('/evento/pagamento/{id}', [EventoController::class, 'add_meio_de_pagamento'])->middleware(['auth', 'verified', 'can:normal'])->name('evento.meioPagamento');
    Route::get('/evento/cancelar', [EventoController::class, 'cancelar_evento'])->middleware(['auth', 'verified', 'can:normal'])->name('evento.cancelar');
    Route::get('/evento/pagamentoFeito/{id}', [EventoController::class, 'pagamento_feito'])->middleware(['auth', 'verified', 'can:normal'])->name('evento.pagamentoFeito');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
