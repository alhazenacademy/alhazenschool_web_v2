<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TrialClassController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/program/full-online-group-learning', [LandingController::class, 'program_full_online_group'])->name('full-online-group-learning');
Route::get('/program/hybrid-group-learning', [LandingController::class, 'program_hybrid_group'])->name('hybrid-group-learning');
Route::get('/program/guided-self-learning', [LandingController::class, 'program_guided_self'])->name('guided-self-learning');
Route::get('/admission', [LandingController::class, 'admission'])->name('admission');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/blog/show', [LandingController::class, 'blogShow'])->name('blogShow');
// Route::get('/artikel', [LandingController::class, 'article'])->name('artikel');
// Route::get('/category/{slug}', [LandingController::class, 'category'])->name('category.show');

// Route::get('/kelasgratis', [TrialClassController::class, 'index'])->name('trial');
// Route::get('/thank-you', [TrialClassController::class, 'thank_you'])->name('trial.thank_you');
// Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
// Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');

Route::view('/coming-soon', 'coming_soon')->name('coming-soon');

/** PREVIEW: dummy data (tanpa kirim) — buka http://localhost:8000/_preview/email/trial */
// Route::get('/_preview/email/trial', [TrialClassController::class, 'testTrialToEmail']);

// wildcard
// Route::get('/{slug}', [LandingController::class, 'articleShow'])->name('artikel.show');