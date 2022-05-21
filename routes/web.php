<?php

use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('front.home');

        Route::get('/services', [ServiceController::class, 'index'])->name('front.services');

        Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('front.service');

        Route::get('/projects', [HomeController::class, 'projects'])->name('front.projects');

        Route::get('/about', [HomeController::class, 'about'])->name('front.about');

        Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');

        Route::post('/contact', [ContactController::class, 'store'])->name('front.store');

        // Route::get('/home', [HomeController::class, 'index'])->;


    });

    Route::prefix('admin')->group(function () {

        Auth::routes();

    });
