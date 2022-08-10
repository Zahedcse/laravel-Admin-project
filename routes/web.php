<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/table', function () {
//     return view('backend.table');
// });
// Route::get('/404', function () {
//     return view('backend.404');
// });
// Route::get('/chart', function () {
//     return view('backend.chart');
// });
// Route::get('/register', function () {
//     return view('backend.register');
// });
// Route::get('/login', function () {
//     return view('backend.login');
// });
// Route::get('categories/create-categories', [CategoryController::class , 'create']);
// Route::get('categories/', [CategoryController::class , 'index']);
// Route::post('store-categories', [CategoryController::class , 'store']);
// Route::get('categories/edit/{id}', [CategoryController::class , 'edit']);
// Route::get('categories/delete/{id}', [CategoryController::class , 'delete']);
// Route::post('update-categories/{id}', [CategoryController::class , 'update']);
// Route::get('/categories/{id}', [CategoryController::class , 'show'])->name('categories.show');
// Route::resource('category', CategoryController::class);


// Group Route

Route::group(['middleware'=>'checkloggedin'], function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::resources([
    'category'=> CategoryController::class,
    'product'=> ProductController::class,
]);
});

// product
// Route::resource('/products', ProductController::class);
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::get('/register', 'registration')->name('register');
    Route::post('/login-store', 'loginstore');
    Route::post('/reg-store', 'regstore');
    Route::get('/logout', 'logout');
});
