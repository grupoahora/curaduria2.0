<?php

use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;




Route::get('',[ClientController::class, 'index'])->Middleware('can:client.home')->name('client.home');

Route::resource('sales', SaleController::class)->names('client.sales');

