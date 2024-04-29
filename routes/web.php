<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/show', [StudentController::class, 'index'])->name('student.show');

Route::get('/add', [StudentController::class, 'add'])->name('student.add');
// Route::post('/add', [StudentController::class, 'store'])->name('student.store');

Route::get('/edit/{id?}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/add/{id?}', [StudentController::class, 'store'])->name('student.store');
