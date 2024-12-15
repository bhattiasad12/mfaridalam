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
    return redirect()->route('articles.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/getArticles', [ArticleController::class, 'getArticles'])->name('getArticles');
Route::get('/getreports', [ReportController::class, 'getReports'])->name('getReports');
Route::get('/getpresentations', [PresentationController::class, 'getPresentations'])->name('getPresentations');
Route::get('/getnews', [NewsController::class, 'getNews'])->name('getNews');
Route::get('/getevents', [EventController::class, 'getEvents'])->name('getEvents');
Route::get('/getevent-detail', [EventController::class, 'eventDetail'])->name('eventDetail');
Route::get('/getinterviews', [InterviewController::class, 'getInterviews'])->name('getInterviews');
Route::get('/getabout-me', [WelcomeController::class, 'getAboutMe'])->name('getAboutMe');
Route::get('/getcontact-me', [WelcomeController::class, 'getContactMe'])->name('getContactMe');

Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('presentations', PresentationController::class);
    Route::resource('news', NewsController::class);
    Route::resource('interviews', InterviewController::class);
    Route::resource('events', EventController::class);

    Route::get('/articles/{id}/download', [ArticleController::class, 'download'])->name('articles.download');
    Route::get('/reports/{id}/download', [ReportController::class, 'download'])->name('reports.download');
    Route::get('/presentations/{id}/download', [PresentationController::class, 'download'])->name('presentations.download');
    Route::get('/news/{id}/download', [NewsController::class, 'download'])->name('news.download');
});
require __DIR__ . '/auth.php';
