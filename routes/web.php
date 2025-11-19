<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'en|tr'],
    'middleware' => ['web', SetLocale::class],
], function () {

    Route::get('/registration', [RegistrationController::class, 'create'])
        ->name('registrations.create');

    Route::post('/registration', [RegistrationController::class, 'store'])
        ->name('registrations.store');

    Route::get('/registration/thank-you', [RegistrationController::class, 'thankyou'])
        ->name('registrations.thankyou');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
