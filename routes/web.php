<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DatabaseController;
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

Route::get('/', [DatabaseController::class, 'show'])->name('main');

Route::get('/single', [BookController::class, 'show'])->name('single');

Route::get('/add', [BookController::class, 'add'])->name('add');
Route::post('/create', [BookController::class, 'create'])->name('create');

Route::post('/delete', [BookController::class, 'delete'])->name('delete');

Route::post('/edit', [BookController::class, 'edit'])->name('edit');
Route::post('/update', [BookController::class, 'update'])->name('update');

