<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

include_once __DIR__ . '/auth.php';

Route::get('/', [WebsiteController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('invoices', InvoiceController::class);
        Route::resource('companies', CompanyController::class)->only(['index', 'store', 'create']);

        Route::prefix('companies')->group(function () {
            Route::get('find', [CompanyController::class, 'find'])->name('companies.find');
            Route::post('found', [CompanyController::class, 'found'])->name('companies.found');
        });

    });
});
