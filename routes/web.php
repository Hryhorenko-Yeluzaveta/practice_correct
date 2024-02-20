<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'showUSer'])->name('welcome');
Route::post('/welcome/{id}', [UserController::class, 'updateUser'])->name('update');
