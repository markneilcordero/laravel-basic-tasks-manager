<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::get('/tasks/show/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::put('/tasks/edit/{id}', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');