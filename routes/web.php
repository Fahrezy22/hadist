<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HadistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\DetailHadistController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/hadist', [HadistController::class, 'index'])->name('admin.hadist');
Route::get('/auth', [LoginController::class, 'index']);

Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.hadist');
Route::get('/list_hadist', [UserDashboardController::class, 'list'])->name('list.hadist');
Route::get('/detail_hadist', [DetailHadistController::class, 'index'])->name('detail.hadist');
