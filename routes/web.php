<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TrialClassController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/primary-school/full-online-group-learning', [LandingController::class, 'primary_school_full_online_group'])->name('full-online-group-learning');
Route::get('/primary-school/hybrid-group-learning', [LandingController::class, 'primary_school_hybrid_group'])->name('hybrid-group-learning');
Route::get('/primary-school/guided-self-learning', [LandingController::class, 'primary_school_guided_self'])->name('guided-self-learning');
Route::get('/admission', [LandingController::class, 'admission'])->name('admission');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/artikel', [LandingController::class, 'article'])->name('artikel');
Route::get('/category/{slug}', [LandingController::class, 'category'])->name('category.show');

Route::get('/kelasgratis', [TrialClassController::class, 'index'])->name('trial');
Route::get('/thank-you', [TrialClassController::class, 'thank_you'])->name('trial.thank_you');
Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');

Route::view('/coming-soon', 'coming_soon')->name('coming-soon');

/** PREVIEW: dummy data (tanpa kirim) — buka http://localhost:8000/_preview/email/trial */
Route::get('/_preview/email/trial', [TrialClassController::class, 'testTrialToEmail']);

// wildcard
Route::get('/{slug}', [LandingController::class, 'articleShow'])->name('artikel.show');