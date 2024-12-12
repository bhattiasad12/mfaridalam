<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/articles',[ArticleController::class, 'getArticles'])->name('getArticles');
Route::get('/reports',[ReportController::class, 'getReports'])->name('getReports');
Route::get('/presentations',[PresentationController::class, 'getPresentations'])->name('getPresentations');
Route::get('/news',[NewsController::class, 'getNews'])->name('getNews');
Route::get('/events',[EventController::class, 'getEvents'])->name('getEvents');
Route::get('/interviews',[InterviewController::class, 'getInterviews'])->name('getInterviews');
Route::get('/about-me',[WelcomeController::class, 'getAboutMe'])->name('getAboutMe');
Route::get('/contact-me',[WelcomeController::class, 'getContactMe'])->name('getContactMe');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
