<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/200', function () {
    return 'ok';
    return response()->json([
        'msg' => 'Ok'
    ], 200);
});
Route::get('/500', function () {
    return response()->json([
        'msg' => 'Server Error!'
    ], 500);
});

Route::get('/400', function () {
    return response()->json([
        'msg' => 'Client Error!'
    ], 400);
});
