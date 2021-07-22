<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Agricultor\HomeController;



Route::get('',[HomeController::class, 'index'])->Middleware('can:agricultor.home')->name('agricultor.home');