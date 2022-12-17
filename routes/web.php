<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile',[\App\Http\Controllers\HomeController::class,'profileIndex'])->name('profile.index');
    Route::put('/profile/update/{user}',[\App\Http\Controllers\HomeController::class,'profileUpdate'])->name('profile.update');
    Route::get('/passwords',[\App\Http\Controllers\HomeController::class,'passwordIndex'])
        ->middleware('password.confirm')
        ->name('passwords.index');
    Route::put('/passwords/update/{user}',[\App\Http\Controllers\HomeController::class,'resetPassword'])->name('passwords.update');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    //Route::resource('products', ProductController::class);
});

Route::get('books','App\Http\Controllers\BooksController@getAllBooks')->name('books.index');
Route::post('booksPost','App\Http\Controllers\BooksController@bookCreate')->name('books.store');
Route::get('books/{id}','App\Http\Controllers\BooksController@getBookById')->name('books.show');
Route::delete('books/delete/{id}','App\Http\Controllers\BooksController@getbyIdDelete')->name('books.destroy');
Route::PUT('books/update/{id}','App\Http\Controllers\BooksController@booksUpdate')->name('books.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

