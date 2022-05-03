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
Route::get('/Browse', [App\Http\Controllers\BookController::class, 'index'])->name('browse');
Route::post('/Browse', [App\Http\Controllers\BookController::class, 'search']);
Route::post('/Browse/{id}', [App\Http\Controllers\BookController::class, 'getBook'])->name("getBook");
Route::get('/Browse/{genre}', [App\Http\Controllers\BookController::class, 'browwseGenre']);

//myBooks
Route::get('/NewBook/getSubGenre/{id}',[App\Http\Controllers\BookController::class, 'getSubGenre'])->name('fetchSubGenre');
Route::post('/NewBook',[App\Http\Controllers\BookController::class, 'store']);
Route::get('/MyBooks',[App\Http\Controllers\BookController::class, 'myBooks'])->name('ownBooks');
Route::get('/MyBooks/{id}',[App\Http\Controllers\BookController::class, 'myBook'])->name('ownBook');
//CRUD
Route::get('/NewBook',[App\Http\Controllers\BookController::class, 'create'])->name('addBook');
Route::get('/MyBooks/changeBook/{id}',[App\Http\Controllers\BookController::class, 'getBook'])->name('changeBook');
Route::post('/MyBooks/changeBook/{id}',[App\Http\Controllers\BookController::class, 'update'])->name('changeBookPost');
Route::get('/MyBooks/{id}/publish',[App\Http\Controllers\BookController::class, 'publishBook'])->name('publishBook');
Route::get('/MyBooks/{id}/unpublish',[App\Http\Controllers\BookController::class, 'unPublishBook'])->name('unPublishBook');
Route::get('/MyBooks/{id}/delete',[App\Http\Controllers\BookController::class, 'deleteBook'])->name('deleteBook');


//chapters
Route::get('/MyBooks/{id}/chapters',[App\Http\Controllers\ChapterController::class, 'getOwnBookChapters'])->name('getChapters');

//CRUD
Route::get('/MyBooks/{id}/chapters/newChapter',[App\Http\Controllers\ChapterController::class, 'newChapter'])->name('newChapter');
Route::Post('/MyBooks/{id}/chapters/newChapter',[App\Http\Controllers\ChapterController::class, 'addChapter'])->name('addChapter');
Route::get('/MyBooks/{id}/changeChapter/{chapter_id}',[App\Http\Controllers\ChapterController::class, 'getChapter'])->name('changeChapter');
Route::post('/MyBooks/{id}/changeChapter/{chapter_id}',[App\Http\Controllers\ChapterController::class, 'update'])->name('changeChapterPost');
Route::get('/MyBooks/{id}/chapters/{chapter_id}/delete',[App\Http\Controllers\ChapterController::class, 'deleteChapter'])->name('deleteChapter');
Route::get('/MyBooks/{id}/chapters/{chapter_id}/publish',[App\Http\Controllers\ChapterController::class, 'publishChapter'])->name('publishChapter');
Route::get('/MyBooks/{id}/chapters/{chapter_id}/unpublish',[App\Http\Controllers\ChapterController::class, 'unPublishChapter'])->name('unPublishChapter');

//genres
Route::get('/Genres',[App\Http\Controllers\GenreController::class, 'getGenres'])->name('getGenres');
Route::get('{name}/subGenres',[App\Http\Controllers\GenreController::class, 'getSubGenres'])->name('getSubGenres');