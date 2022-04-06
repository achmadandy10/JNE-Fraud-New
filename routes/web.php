<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\RegulationTypeController;
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
    Route::get('/', [DatabaseController::class, 'dashboard'])->name('dashboard');

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
        Route::get('/upload-banner', [BannerController::class, 'index'])->name('banner-index');

        Route::post('/upload-banner/store', [BannerController::class, 'store'])->name('banner-store');
    });

    Route::prefix('regulation_type')->group(function () {
        Route::get('/', [RegulationTypeController::class, 'index'])->name('regulation-type-index');
        Route::get('/create', [RegulationTypeController::class, 'create'])->name('regulation-type-create');

        Route::post('/create/store', [RegulationTypeController::class, 'store'])->name('regulation-type-store');
    });

    Route::prefix('information')->group(function () {
        Route::get('/law', [InformationController::class, 'index'])->name('law-index');
        Route::get('/law/create', [InformationController::class, 'create'])->name('law-create');
        Route::get('/law/detail/{id}', [InformationController::class, 'detail'])->name('law-detail');
        Route::post('/law/create/store', [InformationController::class, 'store'])->name('law-store');
        Route::get('/law/destroy/{id}', [InformationController::class, 'destroy'])->name('law-destroy');

        Route::get('/qna', [QnAController::class, 'index'])->name('qna-index');
        Route::get('/qna/create', [QnAController::class, 'create'])->name('qna-create');
        Route::get('/qna/detail/{id}', [QnAController::class, 'detail'])->name('qna-detail');
        Route::post('/qna/create/store', [QnAController::class, 'store'])->name('qna-store');
        Route::get('/qna/destroy/{id}', [QnAController::class, 'destroy'])->name('qna-destroy');
    });

    Route::prefix('database')->group(function () {
        Route::get('/', [DatabaseController::class, 'index'])->name('database-index');

        Route::get('/create', [DatabaseController::class, 'create'])->name('database-create');
        Route::post('/create/store', [DatabaseController::class, 'store'])->name('database-store');

        Route::get('/detail/{id}', [DatabaseController::class, 'detail'])->name('database-detail');

        Route::get('/edit/{id}', [DatabaseController::class, 'edit'])->name('database-edit');
        Route::post('/edit/{id}', [DatabaseController::class, 'update'])->name('database-update');

        Route::get('/destroy/{id}', [DatabaseController::class, 'destroy'])->name('database-destroy');
    });
});

Route::get('/', function () {
    return view('login');
});
