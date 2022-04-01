<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProceedingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



route::get('reportes_por_fecha_public', [WebController::class, 'reports_date_public'])->name('reports.date.public');
Route::get('proceed/json', [WebController::class, 'proceed'])->name('proceed.json');
Route::get('proceed/resultado', [WebController::class, 'search_proceedings'])->name('search.proceedings');
Route::get('get_proceed', [WebController::class, 'get_proceed'])->name('get.proceed');
Route::get('reporte_generado_publico', [WebController::class, 'reporte_generado_publico'])->name('genere.reports.public');
route::get('postdetail/{id}', [WebController::class, 'post_detail'])->name('post.detail');

Route::get('/proximamente', function () {
    return view('web.contact');
})->name('contact');

Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
