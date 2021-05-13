<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('chat', [ChatController::class, 'index'])->name('chat');
Route::post('send', [ChatController::class, 'send'])->name('send');
Route::post('saveToSession', [ChatController::class, 'saveToSession'])->name('saveToSession');
Route::post('deleteSession', [ChatController::class, 'deleteSession'])->name('deleteSession');


Route::post('getOldMessage', [ChatController::class, 'getOldMessage'])->name('getOldMessage');

Route::get('sendemail', [Mailcontroller::class, 'sendemail'])->name('sendemail');

Route::get('check', function (){
    return session('chat');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
