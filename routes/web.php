<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\ContainsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('layouts.guest');
//})->name('site.accueil');

Route::get('/', [HomeController::class, 'index'])->name('site.accueil');

Route::prefix('site')->group(function () {
    Route::get('event', [EventsController::class, 'index'])->name('site.event');
    Route::get('meet', [EventsController::class, 'meet'])->name('site.meet');
});
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('admin_page', [AdminController::class, 'index'])->name('admin.home');
Route::middleware(['auth', 'verified'])->group(function (){
    Route::prefix("manager")->group(function (){
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/admin-profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::get('/advertise', [AdvertiseController::class, 'index'])->name('admin.pubs');
        Route::get('/publications/{attr}', [ContainsController::class, 'index'])->name('admin.contains');
        Route::get('/evenements/{attr}', [EventsController::class, 'indexAdmin'])->name('admin.events');
    });
});


require __DIR__.'/auth.php';
