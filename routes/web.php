<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [BackendController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/main', [MainController::class, 'main'])->name('admin.main');
Route::post('/admin/main', [MainController::class, 'update'])->name('admin.main.update');




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('laraHome');
