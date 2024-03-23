<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SliderController::class, 'index']);
Route::get('/login', function (){
    return view('admin/login');
});
Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/home/{id}', [DashboardController::class, 'slider']);
Route::get('/tambahfile/{identity}', [DashboardController::class, 'tambah']);
Route::post('/slider_proses', [DashboardController::class, 'slider_proses']);
// Route::get('/home', [DashboardController::class, 'index']);
