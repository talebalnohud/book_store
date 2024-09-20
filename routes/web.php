<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;


Route::group(['prefix'=>'admin', 'as'=>'books.', 'middleware'=>'auth'], function(){
    Route::get('/books', [BookController::class, 'index'])->name('index');

});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
