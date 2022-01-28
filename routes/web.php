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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name("admin.dashboard");
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.index');
    })->name("user.dashboard");
    
    Route::prefix('drafting')->group(function () {
        Route::get('/customer', function () {
            return view('user.drafting.customer');
        })->name("user.drafting.customer");

        Route::get('/vendor-and-supplier', function () {
            return view('user.drafting.vendor_and_supplier');
        })->name("user.drafting.vendor_and_supplier");

        Route::get('/lease', function () {
            return view('user.drafting.lease');
        })->name("user.drafting.lease");
    });
});

Route::get('/', function () {
    return view('welcome');
});