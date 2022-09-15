<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoelkastBlogController;
use App\Models\KoelkastBlog;
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
Route::resource('koelkast', KoelkastBlogController::class);

Route::get('/', [\App\Http\Controllers\KoelkastBlogController::class, 'index']);
Route::get('/koelkast/{id}', [\App\Http\Controllers\KoelkastBlogController::class, 'show']);

Route::get('/koelkast/create', [\App\Http\Controllers\KoelkastBlogController::class, 'create']);
Route::post('/koelkast/create/store', [\App\Http\Controllers\KoelkastBlogController::class, 'store']);
Route::get('/koelkast/{id}/edit', [\App\Http\Controllers\KoelkastBlogController::class, 'edit']);
Route::post('/koelkast/{id}/editStore', [\App\Http\Controllers\KoelkastBlogController::class, 'update']);
Route::delete('/koelkast/{id}', [\App\Http\Controllers\KoelkastBlogController::class, 'destroy']);

Route::get('/reparatie/create', [\App\Http\Controllers\KoelkastBlogController::class, 'create2']);
Route::post('/reparatie/create/store', [\App\Http\Controllers\KoelkastBlogController::class, 'store2']);
Route::get('/reparatie/{id}/edit2', [\App\Http\Controllers\KoelkastBlogController::class, 'edit2']);
Route::post('/reparatie/{id}/editStore2', [\App\Http\Controllers\KoelkastBlogController::class, 'update2']);
Route::delete('/reparatiet/{id}', [\App\Http\Controllers\KoelkastBlogController::class, 'destroy2']);
