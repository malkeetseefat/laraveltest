<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblbooksController;
use App\Http\Controllers\AuthorsController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('add_books', [TblbooksController::class, 'index']);
Route::any('booksadd', [TblbooksController::class, 'store']);
Route::any('all_books', [TblbooksController::class, 'show']);
Route::any('edit_books/{id}', [TblbooksController::class, 'edit']);
Route::any('update_books', [TblbooksController::class, 'update']);
Route::any('delete_books/{id}', [TblbooksController::class, 'destroy']);

Route::any('add_authors', [AuthorsController::class, 'index']);
Route::any('authorsadd', [AuthorsController::class, 'store']);
Route::any('all_authors', [AuthorsController::class, 'show']);