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

    Route::prefix('litigation')->group(function () {
        Route::get('/customer-dispute', function () {
            return view('user.litigation.customer_dispute');
        })->name("user.litigation.customer_dispute");

        Route::get('/fraud', function () {
            return view('user.litigation.fraud');
        })->name("user.litigation.fraud");

        Route::get('/outstanding', function () {
            return view('user.litigation.outstanding');
        })->name("user.litigation.outstanding");

        Route::get('/other', function () {
            return view('user.litigation.other');
        })->name("user.litigation.other");
    });

    Route::prefix('permit')->group(function () {
        Route::get('/perizinan-baru', function () {
            return view('user.permit.new_permit');
        })->name("user.permit.new_permit");

        Route::get('/perpanjangan', function () {
            return view('user.permit.renew_permit');
        })->name("user.permit.renew_permit");
    });

    Route::prefix('banner')->group(function () {
        Route::get('/upload-banner', function () {
            return view('user.banner.index');
        })->name("user.banner.index");
    });
});

Route::get('/', function () {
    return view('login');
});
