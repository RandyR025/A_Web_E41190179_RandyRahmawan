<?php

use App\Http\Controllers\Backend\PengalamanKerjaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');

/* Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
}); */
Route::get('/pengalaman_kerja', [PengalamanKerjaController::class, 'index'])->name('pengalaman_kerja.index');
Route::get('/pengalaman_kerja/create', [PengalamanKerjaController::class, 'create']);
Route::post('/pengalaman_kerja/store', [PengalamanKerjaController::class, 'store'])->name('pengalaman_kerja.store');
Route::get('/pengalaman_kerja/{id}/edit', [PengalamanKerjaController::class, 'edit'])->name('pengalaman_kerja.edit');
Route::post('/pengalaman_kerja/update/{id}', [PengalamanKerjaController::class, 'update'])->name('pengalaman_kerja.update');
Route::delete('/pengalaman_kerja/destroy/{id}', [PengalamanKerjaController::class, 'destroy'])->name('pengalaman_kerja.destroy');