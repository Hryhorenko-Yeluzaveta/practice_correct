<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'showUser'])->name('welcome');
Route::post('/welcome/{userId}', [UserController::class, 'updateUser'])->name('update');
