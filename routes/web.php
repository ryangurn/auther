<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RoleController;

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

// authentication
Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::get('/dashboard', function(){
       return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/update/{user}', [UserController::class, 'edit'])->name('user.update');
        Route::get('/{user:id}', [UserController::class, 'show'])->name('user.show');
    });

    Route::group(['prefix' => 'setting'], function(){
        Route::get('/', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/update/{setting}', [SettingController::class, 'edit'])->name('setting.update');
        Route::get('/{setting:id}', [SettingController::class, 'show'])->name('setting.show');
    });

    Route::group(['prefix' => 'role'], function() {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::get('/update/{role}', [RoleController::class, 'edit'])->name('role.update');
        Route::get('/{role:id}', [RoleController::class, 'show'])->name('role.show');
    });
});
