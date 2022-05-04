<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnoucementController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RequestInventoryController;
use App\Http\Controllers\RequestRuanganController;

Route::group(['domain' => ''], function() {
    Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
    Route::prefix('auth')->name('auth.')->group(function(){
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
        Route::post('forgot',[AuthController::class, 'do_forgot'])->name('forgot');
        Route::get('reset/{token}',[AuthController::class, 'reset'])->name('getreset');
        Route::post('reset',[AuthController::class, 'do_reset'])->name('reset');
    });
    Route::middleware(['auth:web'])->group(function(){
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
        Route::resource('annoucements', AnnoucementController::class);
        Route::get('background', [HomeController::class, 'background'])->name('background');
        Route::get('staff', [HomeController::class, 'staff'])->name('staff');
        Route::get('galery', [GaleryController::class, 'galery'])->name('galery');
        Route::get('kelasbahasainggris', [LayananController::class, 'kelasbahasainggris'])->name('kelasbahasainggris');
        Route::get('ujiantoefl', [LayananController::class, 'ujiantoefl'])->name('ujiantoefl');
        Route::get('penerjemah', [LayananController::class, 'penerjemah'])->name('penerjemah');

        Route::get('requestinventory', [LayananController::class, 'requestinventory'])->name('requestinventory');
        Route::get('requestruangan', [LayananController::class, 'requestruangan'])->name('requestruangan');
        Route::post('conversation/{conversation}', [ConversationController::class, 'reply'])->name('conversation.reply');
        Route::resource('conversation', ConversationController::class);
        // Route::post('conversation', [ConversationController::class, 'store'])->name('conversation.store');
        

        Route::get('requestinventory', [RequestInventoryController::class, 'requestinventory'])->name('requestinventory');
        Route::get('requestruangan', [RequestRuanganController::class, 'requestruangan'])->name('requestruangan');

    });
    Route::group(['middleware' => ['admin']], function () {
        Route::resource('annoucements', AnnoucementController::class);
        // Route::resource('conversation', ConversationController::class);
    });    
});