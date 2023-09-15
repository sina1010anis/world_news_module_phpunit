<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

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

Route::prefix('user')->middleware(['auth'])->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('profile');
    Route::post('/new/post', [UserController::class, 'newPost'])->name('new.post');
    Route::get('/comment', [UserController::class, 'showComment'])->name('show.comment');
});
