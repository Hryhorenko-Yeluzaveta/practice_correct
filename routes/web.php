<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [UsersController::class, 'showUSer'])->name('welcome');
Route::post('/welcome/{id}', [UsersController::class, 'updateUser'])->name('update');
