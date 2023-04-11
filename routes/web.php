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
        return redirect()->route('admin_catalogo');
    } else {
        return view('livewire.my-dashboard', [
            'eventos' => Evento::all(),
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

Route::resource('evento', EventoController::class)->middleware(['auth', 'verified', 'can:normal']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
