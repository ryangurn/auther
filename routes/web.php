<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\OAuthController;

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
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // dashboard
    Route::get('/dashboard', function(){
       return view('dashboard');
    })->name('dashboard');

    // users
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/update/{user}', [UserController::class, 'edit'])->name('user.update');
        Route::get('/{user:id}', [UserController::class, 'show'])->name('user.show');
    });

    // settings
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/update/{setting}', [SettingController::class, 'edit'])->name('setting.update');
        Route::get('/{setting:id}', [SettingController::class, 'show'])->name('setting.show');
    });

    // roles
    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::get('/update/{role}', [RoleController::class, 'edit'])->name('role.update');
        Route::get('/{role:id}', [RoleController::class, 'show'])->name('role.show');
    });

    // permissions
	Route::group(['prefix' => 'permission'], function () {
		Route::get('/', [PermissionController::class, 'index'])->name('permission.index');
	});

    // oauth
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/dashboard', [OAuthController::class, 'dashboard'])->name('auth.dashboard');

        Route::group(['prefix' => 'access_tokens'], function (){
            Route::get('/', [OAuthController::class, 'access_tokens'])->name('auth.access_tokens');
            Route::get('/revoke/{token}', [OAuthController::class, 'access_tokens_revoke'])->name('auth.access_tokens_revoke');
            Route::get('/{token}', [OAuthController::class, 'access_tokens_show'])->name('auth.access_tokens_show');
        });

        Route::group(['prefix' => 'auth_codes'], function (){
            Route::get('/', [OAuthController::class, 'auth_codes'])->name('auth.auth_codes');
            Route::get('/revoke/{code}', [OAuthController::class, 'auth_codes_revoke'])->name('auth.auth_codes_revoke');
            Route::get('/{code}', [OAuthController::class, 'auth_codes_show'])->name('auth.auth_codes_show');
        });

        Route::group(['prefix' => 'clients'], function (){
            Route::get('/', [OAuthController::class, 'clients'])->name('auth.clients');
            Route::get('/revoke/{client}', [OAuthController::class, 'clients_revoke'])->name('auth.clients_revoke');
            Route::get('/{client}', [OAuthController::class, 'clients_show'])->name('auth.clients_show');
        });

        Route::group(['prefix' => 'personal_access_clients'], function (){
            Route::get('/', [OAuthController::class, 'personal_access_clients'])->name('auth.personal_access_clients');
        });

        Route::group(['prefix' => 'refresh_tokens'], function (){
            Route::get('/', [OAuthController::class, 'refresh_tokens'])->name('auth.refresh_tokens');
            Route::get('/revoke/{token}', [OAuthController::class, 'refresh_tokens_revoke'])->name('auth.refresh_tokens_revoke');
            Route::get('/{token}', [OAuthController::class, 'refresh_tokens_show'])->name('auth.refresh_tokens_show');
        });
    });
});
