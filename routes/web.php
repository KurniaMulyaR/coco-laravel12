<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

// User page (public)
Route::get('/client', function () {
    return view('client');
});

// Public store (no login)
Route::post('/contact-messages', [\App\Http\Controllers\ContactMessagePublicController::class, 'store'])
    ->name('contact-messages.store');

// Button click logs (simple endpoint)
Route::post('/button-click-logs', [\App\Http\Controllers\ButtonClickLogController::class, 'store'])
    ->name('button-click-logs.store')
    ->withoutMiddleware(['web', 'auth']);








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Admin CRUD
Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::resource('contact-messages', \App\Http\Controllers\Admin\ContactMessageController::class)
        ->names('contact-messages');
});

});


require __DIR__.'/auth.php';

