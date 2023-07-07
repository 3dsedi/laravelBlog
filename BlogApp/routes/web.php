<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/posts', function () {
    return view('posts.index');
});



