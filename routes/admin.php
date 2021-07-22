<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\FarmController;
use App\Http\Controllers\Admin\MisueloController;

use GuzzleHttp\Middleware;

Route::get('',[HomeController::class, 'index'])->Middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::put('users/{user}', [UserController::class, 'updatefarms'])->name('admin.users.updatefarms');

Route::get('users/{user}', [UserController::class, 'editdos'])->name('admin.users.editfarms');




Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('farms', FarmController::class)->names('admin.users.farms');

Route::resource('lots', LotController::class)->names('admin.users.farms.lots');

Route::get('misuelos', [MisueloController::class, 'index'])->name('admin.misuelos');