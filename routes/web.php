<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('backend.home');
});
Route::get('/table', function () {
    return view('backend.table');
});
Route::get('/404', function () {
    return view('backend.404');
});
Route::get('/chart', function () {
    return view('backend.chart');
});
Route::get('/register', function () {
    return view('backend.register');
});
Route::get('/login', function () {
    return view('backend.login');
});

Route::get('categories/create-categories', [CategoryController::class , 'create']);
Route::get('categories/', [CategoryController::class , 'index']);
Route::post('store-categories', [CategoryController::class , 'store']);
Route::get('categories/edit/{id}', [CategoryController::class , 'edit']);
Route::post('update-categories/{id}', [CategoryController::class , 'update']);
