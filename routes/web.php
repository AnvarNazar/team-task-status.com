<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Index::class)->name('index')->middleware('auth');
Route::get('/login', \App\Livewire\LoginForm::class)->name('login');
Route::get('/logout', [\App\Http\Controllers\AppController::class, 'logout'])->name('logout');

