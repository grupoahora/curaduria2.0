<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;




Route::get('',[HomeController::class, 'index'])->Middleware('can:cliente.home')->name('cliente.home');

Route::resource('clients', ClientController::class)->only(['index', 'edit', 'update', 'show'])->names('admin.clients');

