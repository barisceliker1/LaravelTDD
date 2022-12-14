<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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
    return view('books');
});

Route::get('books','App\Http\Controllers\BooksController@getAllBooks');
Route::post('booksPost','App\Http\Controllers\BooksController@bookCreate');
Route::get('books/{id}','App\Http\Controllers\BooksController@getBookById');
Route::delete('books/delete/{id}','App\Http\Controllers\BooksController@getbyIdDelete');
Route::PUT('books/update/{id}','App\Http\Controllers\BooksController@booksUpdate');


