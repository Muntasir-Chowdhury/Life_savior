<?php

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
    return view('landing_page');
});

Route::get('donar_list/', function () {
    return view('donorList');
})->middleware('auth');
Route::get('donorform/', function () {
    return view('donorform');
})->middleware('auth');

Route::get('post_list/', function () {
    return view('postList');
})->middleware('auth');
Route::get('eligible_list/', function () {
    return view('eligible');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/storeCar',[App\Http\Controllers\CarsController::class, 'storeCar']);
Route::get('/getCars',[App\Http\Controllers\CarsController::class, 'getCars']);
Route::post('/deleteCar/{id}',[App\Http\Controllers\CarsController::class, 'deleteCar']); 
Route::post('/editCars/{id}',[App\Http\Controllers\CarsController::class, 'editCar']);

Route::post('/storePost',[App\Http\Controllers\PostsController::class, 'storePost']);
Route::get('/getPosts',[App\Http\Controllers\PostsController::class, 'getPosts']);
Route::post('/deletePost/{id}',[App\Http\Controllers\PostsController::class, 'deletePost']); 
Route::post('/editPosts/{id}',[App\Http\Controllers\PostsController::class, 'editPost']);

Route::get('/search/{q}',[App\Http\Controllers\CarsController::class, 'search']);
