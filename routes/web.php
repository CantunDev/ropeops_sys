<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompaniesQuotesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WorkersController;
use App\Models\Companies;
use App\Models\CompanyQuote;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('providers', ProvidersController::class);
    Route::resource('workers', WorkersController::class);
    Route::resource('companies', CompaniesController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('quotes_company', CompaniesQuotesController::class);

    Route::group(['prefix'=>'quotes_company'], function(){
        Route::get('/{id}/pdf', [CompaniesQuotesController::class, 'pdf'])->name('quotes_company.pdf');
        Route::get('/{id}/upload', [CompaniesQuotesController::class, 'pdf'])->name('quotes_company.upload');
    });
});


require __DIR__.'/auth.php';
