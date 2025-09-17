<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventImagesController;
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
Route::get('/getVideo-library', [InterviewController::class, 'getInterviews'])->middleware(GetVisitCount::class)->middleware(GetVisitCount::class)->name('getVideo-library');
Route::get('/getabout-me', [WelcomeController::class, 'getAboutMe'])->middleware(GetVisitCount::class)->name('getAboutMe');
Route::get('/getcontact-me', [WelcomeController::class, 'getContactMe'])->middleware(GetVisitCount::class)->name('getContactMe');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('presentations', PresentationController::class);
    Route::resource('news', NewsController::class);
    Route::resource('interviews', InterviewController::class);
    Route::resource('events', EventController::class);
    Route::resource('contact', ContactController::class)->except(['store']);

    Route::get('/articles/{id}/download', [ArticleController::class, 'download'])->name('articles.download');
    Route::get('/reports/{id}/download', [ReportController::class, 'download'])->name('reports.download');
    Route::get('/presentations/{id}/download', [PresentationController::class, 'download'])->name('presentations.download');
    Route::get('/news/{id}/download', [NewsController::class, 'download'])->name('news.download');

    Route::prefix('events/{event}/images')->name('events.images.')->group(function () {
        Route::get('/', [EventImagesController::class, 'index'])->name('index');
        Route::get('/create', [EventImagesController::class, 'create'])->name('create');
        Route::post('/store', [EventImagesController::class, 'store'])->name('store');
        Route::delete('/{image}', [EventImagesController::class, 'destroy'])->name('destroy');
    });
});

Route::get('/test-mail', function () {
    try {
        \Illuminate\Support\Facades\Mail::raw('This is a test email.', function ($message) {
            $message->to('bhattiasad12@gmail.com')->subject('Test Email');
        });
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Failed to send email: ' . $e->getMessage();
    }
});


Route::middleware(['auth'])->group(function () {
    Route::get('/artisan/config-cache', function () {
        Artisan::call('config:cache');
        return "Configuration cached successfully!";
    });

    Route::get('/artisan/event-cache', function () {
        Artisan::call('event:cache');
        return "Events cached successfully!";
    });

    Route::get('/artisan/route-cache', function () {
        Artisan::call('route:cache');
        return "Routes cached successfully!";
    });

    Route::get('/artisan/view-cache', function () {
        Artisan::call('view:cache');
        return "Views cached successfully!";
    });

    Route::get('/artisan/optimize', function () {
        Artisan::call('optimize');
        return "Application optimized successfully!";
    });

    Route::get('/artisan/composer-dump', function () {
        exec('composer dump-autoload --optimize');
        return "Composer autoload optimized!";
    });

    Route::get('/artisan/npm-build', function () {
        exec('npm run build');
        return "Assets built using Vite!";
    });

    Route::get('/artisan/npm-production', function () {
        exec('npm run production');
        return "Assets built using Laravel Mix!";
    });
});


Route::get('/asad', function () {
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
