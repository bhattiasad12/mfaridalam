<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\GetVisitCount;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->middleware(GetVisitCount::class)->name('welcome');

Route::get('/dashboard', function () {
    return redirect()->route('articles.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/getArticles', [ArticleController::class, 'getArticles'])->middleware(GetVisitCount::class)->name('getArticles');
Route::get('/getreports', [ReportController::class, 'getReports'])->middleware(GetVisitCount::class)->name('getReports');
Route::get('/getpresentations', [PresentationController::class, 'getPresentations'])->middleware(GetVisitCount::class)->name('getPresentations');
Route::get('/getnews', [NewsController::class, 'getNews'])->middleware(GetVisitCount::class)->name('getNews');
Route::get('/getevents', [EventController::class, 'getEvents'])->middleware(GetVisitCount::class)->name('getEvents');
Route::get('/getevent-detail', [EventController::class, 'eventDetail'])->middleware(GetVisitCount::class)->name('eventDetail');
Route::get('/getinterviews', [InterviewController::class, 'getInterviews'])->middleware(GetVisitCount::class)->middleware(GetVisitCount::class)->name('getInterviews');
Route::get('/getabout-me', [WelcomeController::class, 'getAboutMe'])->middleware(GetVisitCount::class)->name('getAboutMe');
Route::get('/getcontact-me', [WelcomeController::class, 'getContactMe'])->middleware(GetVisitCount::class)->name('getContactMe');

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


Route::get('/down', function () {
    // Check if the application is currently in maintenance mode
    if (app()->isDownForMaintenance()) {
        // Bring the application back up
        Artisan::call('up');
        return response()->json([
            'status' => 'success',
            'message' => 'Application is now live.',
        ]);
    } else {
        // Put the application into maintenance mode
        Artisan::call('down');
        return response()->json([
            'status' => 'success',
            'message' => 'Application is now in maintenance mode.',
        ]);
    }
});

require __DIR__ . '/auth.php';
