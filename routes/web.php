<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/auth', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'login'])->name('login.action');
Route::group([
    'middleware' => 'auth'
], function(){

    Route::group([
        'prefix' => '/admin'
    ], function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::group([
            'prefix' => '/category'
        ], function(){
            Route::get('/', [CategoryController::class, 'index'])->name('category');
            Route::post('/',[CategoryController::class, 'store']);
              Route::get('/{id}/edit',[CategoryController::class, 'edit'])->name('category.edit');
              Route::post('/destroy/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
        });

        Route::group([
            'prefix' => '/hadist'
        ], function(){
            Route::get('/', [HadistController::class, 'index'])->name('hadist');
            Route::post('/',[HadistController::class, 'store'])->name('hadist.store');
            Route::post('/update',[HadistController::class, 'update'])->name('hadist.update');
              Route::get('/{id}/edit',[HadistController::class, 'edit'])->name('hadist.edit');
              Route::get('/{id}/detail',[HadistController::class, 'detail'])->name('hadist.edit');
              Route::post('/destroy/{id}',[HadistController::class, 'destroy'])->name('hadist.destroy');
        });

    });

});

Route::get('/', [UserDashboardController::class, 'index'])->name('user.hadist');
Route::get('/search', [UserDashboardController::class, 'search'])->name('user.search');
Route::get('/list_hadist', [UserDashboardController::class, 'list'])->name('list.hadist');
Route::get('/detail_hadist/{id}', [UserDashboardController::class, 'detail'])->name('detail.hadist');
