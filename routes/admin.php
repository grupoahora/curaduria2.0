<?php

use App\Http\Controllers\Admin\BladeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\GenericvarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SpecificVarController;
use App\Http\Controllers\Admin\FolderController;
use App\Http\Controllers\Admin\SaleController;
use App\Models\GenericVar;
use GuzzleHttp\Middleware;

Route::get('',[HomeController::class, 'index'])->Middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'show'])->names('admin.users');
Route::resource('categorys', CategoryController::class)->names('admin.users.categorys');
Route::resource('roles', RoleController::class)->names('admin.users.roles');
Route::resource('folders', FolderController::class)->names('admin.users.folders');
Route::resource('forms', FormController::class)->names('admin.users.folders.forms');
Route::resource('sales', SaleController::class)->names('admin.users.sales');
/* Route::put('users/{user}', [UserController::class, 'updatefarms'])->name('admin.users.updatefarms');

Route::get('users/{user}', [UserController::class, 'editdos'])->name('admin.users.editfarms');
 */



/* Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('farms', FarmController::class)->names('admin.users.farms');

Route::resource('lots', LotController::class)->names('admin.users.farms.lots');

Route::get('misuelos', [MisueloController::class, 'index'])->name('admin.misuelos'); */