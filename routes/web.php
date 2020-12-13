<?php

use App\Http\Controllers\AuthorBookContoller;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookGenreController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StorageController;
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

Route::resource('/book', BookController::class);
Route::resource('/author', AuthorController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/storage', StorageController::class);
Route::resource('/book_genre', BookGenreController::class);
Route::resource('/author_book', AuthorBookContoller::class);
