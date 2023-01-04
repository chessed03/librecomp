<?php

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




    # Disabled route register (custom register user), verify and reset password
    Auth::routes([
        'register' => false,
        'verify' => true,
        'reset' => false
    ]);

    Route::group(['middleware' => 'auth'], function () {

        # Welcome route
        Route::get('/', function () {
            return view('welcome');
        });

        # Home route
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        # Providers route
        Route::group(['prefix' => 'proveedores'], function () {

            Route::get('index', [App\Http\Controllers\ProveedoresController::class, 'index'])->name('providers-index');

        });

    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
