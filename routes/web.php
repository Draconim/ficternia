<?php

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
    return view('auth.login');
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Book
Route::get('/Books', [App\Http\Controllers\BookController::class, 'index'])->name('books');
Route::get('/Books/{genre}', [App\Http\Controllers\BookController::class, 'browwseGenre']);

//myBooks
Route::get('/NewBook',[App\Http\Controllers\BookController::class, 'create'])->name('addBook');
Route::get('/NewBook/getSubGenre/{id}',[App\Http\Controllers\BookController::class, 'getSubGenre'])->name('fetchSubGenre');
Route::post('/NewBook',[App\Http\Controllers\BookController::class, 'store']);
Route::get('/MyBooks',[App\Http\Controllers\BookController::class, 'myBooks'])->name('ownBooks');
Route::get('/MyBooks/{id}',[App\Http\Controllers\BookController::class, 'myBook'])->name('ownBook');

//chapters