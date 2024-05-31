<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'home');
Route::get('/login', function () {
    if (Auth::check()) {
        redirect('home');
    }
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    // publication routes
    Route::get('/publications', [MainController::class, 'getAdminPublications'])->name('publications.index');
    Route::post('/publications', [MainController::class, 'createNewPublication'])->name('publications.create');
    Route::put('/publications/{id}', [MainController::class, 'updatePublication'])->name('publications.update');
    Route::delete('/publications/{id}', [MainController::class, 'deletePublication'])->name('publications.delete');

    // News and Events routes
    Route::get('/news-and-events', [MainController::class, 'getAdminNewsAndEvents'])->name('news.and.events.index');
    Route::post('/news-and-events', [MainController::class, 'createNewsAndEvents'])->name('news.and.events.create');
    Route::put('/news-and-events/{id}', [MainController::class, 'updateNewsAndEvents'])->name('news.and.events.update');
    Route::delete('/news-and-events/{id}', [MainController::class, 'deleteNewsAndEvents'])->name('news.and.events.delete');

});

