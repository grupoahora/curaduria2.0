<?php

use App\Http\Controllers\Cliente\ClienteController;
use Illuminate\Support\Facades\Route;




Route::get('',[ClienteController::class, 'index'])->Middleware('can:clientes.index')->name('clientes.index');