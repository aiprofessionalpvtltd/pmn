<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('publications.index');
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

    // careers routes
    Route::get('/careers', [MainController::class, 'getAdminCareers'])->name('careers.index');
    Route::post('/careers', [MainController::class, 'createCareers'])->name('careers.create');
    Route::put('/careers/{id}', [MainController::class, 'updateCareers'])->name('careers.update');
    Route::delete('/careers/{id}', [MainController::class, 'deleteCareers'])->name('careers.delete');

});

Route::get('/publications', [MainController::class, 'getPublicPublications'])->name('publications');
Route::get('/careers', [MainController::class, 'getPublicCareers'])->name('public-career-page');

Route::view('/', 'home')->name('home');
Route::view('/team', 'team')->name('team');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/news-and-events', 'news-and-events')->name('news.and.events.public');
