<?php

use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tanzania-safaris', [PageController::class, 'safari'])->name('tanzania-safaris');
Route::get('/safari', [PageController::class, 'safari'])->name('safari');
Route::get('/safari/{slug}', [PageController::class, 'safariShow'])->name('safari.show');
Route::get('/trekking', [PageController::class, 'trekking'])->name('trekking');
Route::get('/trekking/{slug}', [PageController::class, 'trekkingShow'])->name('trekking.show');
Route::get('/zanzibar', [PageController::class, 'zanzibar'])->name('zanzibar');
Route::get('/zanzibar/{slug}', [PageController::class, 'zanzibarShow'])->name('zanzibar.show');
Route::get('/day-trips', [PageController::class, 'dayTrips'])->name('day-trips');
Route::get('/day-trips/{slug}', [PageController::class, 'dayTripShow'])->name('day-trips.show');
Route::get('/special-packages', [PageController::class, 'specialPackages'])->name('special-packages');
Route::get('/special-packages/{slug}', [PageController::class, 'specialPackageShow'])->name('special-packages.show');
Route::get('/other-country', [PageController::class, 'otherCountry'])->name('other-country');
Route::get('/other-country/{slug}', [PageController::class, 'otherCountryShow'])->name('other-country.show');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');

Route::post('/contact', [ContactSubmissionController::class, 'store'])->name('contact.store');
