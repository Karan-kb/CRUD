<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::post('/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');



Route::post('/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::get('/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::post('/show', [StudentController::class, 'show'])->name('students.show');
Route::get('/show', [StudentController::class, 'show'])->name('students.show');

Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');

Route::post('/update/{student}', [StudentController::class, 'update'])->name('students.update');