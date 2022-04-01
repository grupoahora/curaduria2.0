<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProceedingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('proceedings', ProceedingController::class)->names('admin.proceedings');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::post('upload_archive_pr/{id}', [ProceedingController::class, 'upload_archive'])->name('admin.upload.archive.pr');
Route::post('file_delete_archive_pr', [ProceedingController::class, 'file_delete_archive'])->name('admin.file.delete.archive.pr');

Route::resource('formats', FormatController::class)->names('admin.formats');
Route::resource('posts', PostController::class)->names('admin.posts');

route::get('postdetail/{id}', [WebController::class, 'post_detail'])->name('admin.post.detail');
route::get('archive_by_proceeding/{id}', [WebController::class, 'archive_by_proceeding'])->name('admin.archive.detail');
Route::put('change_actions', [WebController::class, 'change_actions'])->name('admin.actions.change');
Route::post('upload_image/{id}', [FormatController::class, 'upload_image'])->name('admin.upload.image');
Route::post('upload_archive/{id}', [FormatController::class, 'upload_archive'])->name('admin.upload.archive');
Route::post('file_delete', [FormatController::class, 'file_delete'])->name('admin.file.delete');
Route::post('file_delete_archive', [FormatController::class, 'file_delete_archive'])->name('admin.file.delete.archive');
route::get('reportes_por_fecha', [WebController::class, 'reports_date'])->name('admin.reports.date');
Route::post('reporte_generado', [WebController::class, 'reporte_generado'])->name('admin.genere.reports');


