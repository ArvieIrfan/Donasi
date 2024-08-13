<?php

use App\Http\Controllers\Api\RelawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontDonasiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('relawan-api', [RelawanController::class, 'index']);
Route::get('relawan-api/{id}', [RelawanController::class, 'show']);

Route::post('relawan-create', [RelawanController::class, 'store']);
Route::put('relawan/{id}', [RelawanController::class, 'update']);

Route::delete('relawan/{id}', [RelawanController::class, 'destroy']);

Route::post('/donasi-callback', [FrontDonasiController::class, 'callback']);
