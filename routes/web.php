<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('posts',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index');
Route::get('paginate2',[\App\Http\Controllers\PostController::class,'paginate2'])->name('posts.paginate2');

Route::get('/pagination', [\App\Http\Controllers\PostController::class,'paginate2']);

Route::post('pagination/fetch', [\App\Http\Controllers\PostController::class,'fetch'])->name('pagination.fetch');
Route::post('pagination/fetch-user', [\App\Http\Controllers\PostController::class,'fetch_user'])->name('pagination.fetch_user');
