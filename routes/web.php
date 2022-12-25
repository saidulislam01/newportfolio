<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfoliosController;

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

Route::prefix('admin')->group(function(){
Route::get('/dashboard', [BackendController::class, 'index'])->name('admin.dashboard');

Route::get('/main', [MainController::class, 'main'])->name('admin.main');
Route::post('/main', [MainController::class, 'update'])->name('admin.main.update');

Route::get('/services/create', [ServicesController::class, 'create'])->name('admin.services.create');
Route::post('/services/create', [ServicesController::class, 'store'])->name('admin.services.store');
Route::get('/services/list', [ServicesController::class, 'show'])->name('admin.services.list');
Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('admin.services.edit');
Route::post('/services/update/{id}', [ServicesController::class, 'update'])->name('admin.services.update');
Route::delete('/services/delete/{id}', [ServicesController::class, 'destroy'])->name('admin.services.delete');

Route::get('/portfolios/create', [PortfoliosController::class, 'create'])->name('admin.portfolios.create');
Route::post('/portfolios/create', [PortfoliosController::class, 'store'])->name('admin.portfolios.store');
Route::get('/portfolios/list', [PortfoliosController::class, 'show'])->name('admin.portfolios.list');
Route::get('/portfolios/edit/{id}', [PortfoliosController::class, 'edit'])->name('admin.portfolios.edit');
Route::post('/portfolios/update/{id}', [PortfoliosController::class, 'update'])->name('admin.portfolios.update');
Route::delete('/portfolios/delete/{id}', [PortfoliosController::class, 'destroy'])->name('admin.portfolios.delete');

Route::get('/about/create', [AboutController::class, 'create'])->name('admin.about.create');
Route::post('/about/create', [AboutController::class, 'store'])->name('admin.about.store');
Route::get('/about/list', [AboutController::class, 'show'])->name('admin.about.list');
Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::post('/about/update/{id}', [AboutController::class, 'update'])->name('admin.about.update');
Route::delete('/about/delete/{id}', [AboutController::class, 'destroy'])->name('admin.about.delete');

});

Route::post('/contact',[ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('laraHome');