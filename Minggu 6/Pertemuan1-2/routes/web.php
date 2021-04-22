<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\TerminableMiddleware;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//1 midlleware
Route::get('admin/profile', function (){
    //
})->middleware('auth');

Route::get('admin', function () {
    return 'ini halaman admin';
})->middleware('admin');

//Dengan menggunakan lebih dari 1 middleware
Route::get('/', function (){
    //
})->middleware('first', 'second');


Route::get('admin/profile', function(){
    //

})->middleware(CheckAge::class);

// Dengan menggunakan group middleware
Route::get('/', function(){
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function (){

});

Route::middleware(['web', 'sucribed'])->group(function () {
    //
});


Route::put('post/{id}', function ($id) {
    //
})->middleware('role:editor');

Route::get('/admin/important', function () {
    return "ini halaman penting untuk admin";
})->middleware('check.role:admin');

Route::get('/terminate/before', function () {
    return session()->has('res');
})->middleware(TerminableMiddleware::class);

Route::get('/terminate/after', function () {
    $res = session()->get('res');
    session()->forget('res');
    return $res;
});