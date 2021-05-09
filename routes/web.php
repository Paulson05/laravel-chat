<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('chat', [ChatController::class, 'index'])->name('chat');
Route::get('send', [ChatController::class, 'send'])->name('send');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
