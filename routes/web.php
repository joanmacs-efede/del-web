<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\QuiSomController;
use App\Http\Controllers\Public\NoticiesController;
use App\Http\Controllers\Public\MobilitzacionsController;
use App\Http\Controllers\Public\ContacteController;
use App\Http\Controllers\Dashboard\UserDashboardController;
use App\Http\Controllers\Dashboard\SindicatDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Pàgines públiques
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/qui-som', [QuiSomController::class, 'index'])->name('qui-som');
Route::get('/noticies', [NoticiesController::class, 'index'])->name('noticies');
Route::get('/mobilitzacions', [MobilitzacionsController::class, 'index'])->name('mobilitzacions');
Route::get('/contacte', [ContacteController::class, 'index'])->name('contacte');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard usuari
Route::middleware(['auth', 'role:user|sindicat|colaborador|admin'])->prefix('dashboard')->group(function () {
    Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard');
});

// Dashboard sindicat
Route::middleware(['auth', 'role:sindicat|admin'])->prefix('dashboard/sindicat')->group(function () {
    Route::get('/', [SindicatDashboardController::class, 'index'])->name('sindicat.dashboard');
});

// Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});
