<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\SaleController as ClientSaleController;
use Illuminate\Support\Facades\Route;



Route::get('',[HomeController::class, 'index'])->Middleware('can:client.home')->name('client.home');

Route::resource('sales', ClientSaleController::class)->names('client.sales');
