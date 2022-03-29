<?php

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
Route::resource('users', UserController::class)->names('users');
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('proceedings', ProceedingController::class)->names('proceedings');
Route::post('upload_archive_pr/{id}', [ProceedingController::class, 'upload_archive'])->name('upload.archive.pr');
Route::post('file_delete_archive_pr', [ProceedingController::class, 'file_delete_archive'])->name('file.delete.archive.pr');

Route::resource('formats', FormatController::class)->names('formats');
Route::resource('posts', PostController::class)->names('posts');
Route::get('proceed/json', [WebController::class, 'proceed'])->name('proceed.json');
Route::get('proceed/resultado', [WebController::class, 'search_proceedings'])->name('search.proceedings');
Route::get('get_proceed', [WebController::class, 'get_proceed'])->name('get.proceed');
route::get('postdetail/{id}', [WebController::class, 'post_detail'])->name('post.detail');
route::get('archive_by_proceeding/{id}', [WebController::class, 'archive_by_proceeding'])->name('archive.detail');
Route::put('change_actions', [WebController::class, 'change_actions'])->name('actions.change');
Route::post('upload_image/{id}', [FormatController::class, 'upload_image'])->name('upload.image');
Route::post('upload_archive/{id}', [FormatController::class, 'upload_archive'])->name('upload.archive');
Route::post('file_delete', [FormatController::class, 'file_delete'])->name('file.delete');
Route::post('file_delete_archive', [FormatController::class, 'file_delete_archive'])->name('file.delete.archive');
Route::get('/proximamente', function () {
    return view('web.contact');
})->name('contact');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
