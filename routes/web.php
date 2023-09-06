<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gradesController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\AllStudentsController;

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

Auth::routes();

Route::get('/', [gradesController::class, 'index']);
Route::get('/home-page/{id}', [gradesController::class, 'show'])->name('show');
Route::get('/contact', [gradesController::class, 'contact']);

Route::post('/form/store', [studentsController::class, 'store'])->name('form.store');
