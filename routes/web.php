<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Main
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
//Razas
Route::get('razas/{tipo}' , [MascotaController::class , 'getRazaPorTipo']);


//User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Roles
Route::post('/users/{user}/updateRols', [ProfileController::class, 'updateRols'])->name('roles.update');

//Mascotas
Route::get('dashboard/mascotas/create',[MascotaController::class,'create'])->name('mascotas.create');
Route::post('dashboard/mascotas',[MascotaController::class,'store'])->name('mascotas.store');
require __DIR__.'/auth.php';
Route::get('mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');
Route::get('mascotas/edit', [MascotaController::class, 'editSelection'])->name('mascotas.edit');
Route::get('mascotas/{id}/edit', [MascotaController::class, 'edit'])->name('mascotas.select');
Route::get('/mascotas/create/getRazaPorTipo/{tipos}', [MascotaController::class, 'getRazaPorTipo']);
Route::patch('mascotas/{id}',[MascotaController::class,'update'])->name('mascotas.update');

//Administrador
Route::middleware(['auth'])->group(function() {
    Route::get('/administrador/mainAdm', [ProfileController::class, 'index'])->name('administrador.mainAdm');
});