<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('index');
})->name('home.index');

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post("/post/store", [PostController::class, 'store'])->name('post.store');

Route::get('/tag', [TagController::class, 'index'])->name('tag.index');
Route::post("/tag/store", [TagController::class, 'store'])->name('tag.store');