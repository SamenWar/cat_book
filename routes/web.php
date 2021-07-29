<?php

use App\Http\Controllers\BookController;
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
    return redirect(route('books.index'));
});
Route::resources([
        'books' => BookController::class
    ]);
route::get('BookList/{order}', [BookController::class, 'fetchBooks']);
Route::post("add",[BookController::class, 'store']);
Route::put("update/{id}",[BookController::class, 'store']);
Route::get("edit/{id}", [BookController::class, 'edit']);
Route::delete("delete/{id}", [BookController::class, 'destroy']);
Route::post('search', [BookController::class, 'search']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

