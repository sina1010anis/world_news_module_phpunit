<?php

use Illuminate\Support\Facades\Route;
use Modules\Desc\Http\Controllers\DescController;

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

Route::prefix('/more')->as('more.')->group(function() {
    Route::get('/{send}', [DescController::class, 'index'])->name('post');
    Route::post('/new/comment/{post_id}', [DescController::class, 'newComment'])->middleware(['auth'])->name('new.comment');
    Route::post('/like/post', [DescController::class, 'likePost'])->middleware(['auth'])->name('like.post');
    Route::get('/test/test', function(){
        return session()->all();
    });
});
