<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMenuController;
use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuItemController::class, 'index'])->name('menu.index');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/menu', [AdminController::class, 'menu'])->name('menu');
    Route::get('/reservations', [AdminController::class, 'reservations'])->name('reservations');
    Route::get('/reclamations', [AdminController::class, 'reclamations'])->name('reclamations');

    // Admin Menu Management Routes
    Route::get('/menu/{id}/edit', [AdminMenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{id}/update', [AdminMenuController::class, 'update'])->name('menu.update');
    Route::get('/menu/index', [AdminMenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/create', [AdminMenuController::class, 'create'])->name('menu.create');
    Route::post('/menu/post', [AdminMenuController::class, 'store'])->name('menu.store');
    Route::delete('/menu/{id}/destroy', [AdminMenuController::class, 'destroy'])->name('menu.destroy');
    //Route::resource('menu', AdminMenuController::class)->except(['show']);
});

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');