<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TrialClassController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/kursus-coding-anak', [LandingController::class, 'kursus_coding_anak'])->name('kursus-coding-anak');
Route::get('/kursus-roblox', [LandingController::class, 'kursus_roblox'])->name('kursus-roblox');
Route::get('/kursus-blender', [LandingController::class, 'kursus_blender'])->name('kursus-blender');
Route::get('/kursus-python', [LandingController::class, 'kursus_python'])->name('kursus-python');
Route::get('/kursus-php', [LandingController::class, 'kursus_php'])->name('kursus-php');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/tentang-kami', [LandingController::class, 'about'])->name('about');
Route::get('/artikel', [LandingController::class, 'article'])->name('artikel');
Route::get('/category/{slug}', [LandingController::class, 'category'])->name('category.show');
Route::get('/holiday-program', [LandingController::class, 'holiday_program'])->name('holiday-program');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/katalog', action: [LandingController::class, 'katalog'])->name('katalog');
Route::get('/kelasgratis', [TrialClassController::class, 'index'])->name('trial');
Route::get('/thank-you', [TrialClassController::class, 'thank_you'])->name('trial.thank_you');
Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');
Route::get('/lokasi', [LandingController::class, 'lokasi'])->name('lokasi');
Route::get('/goes-to-school', [LandingController::class, 'goes_to_school'])->name('goes-to-school');
Route::get('/kompetisi/alhazen-hackathon', [LandingController::class, 'alhazen_hackathon'])->name('alhazen-hackathon');


// Route::view('/pro', 'pro')->name('adult');

/** PREVIEW: dummy data (tanpa kirim) — buka http://localhost:8000/_preview/email/trial */
Route::get('/_preview/email/trial', [TrialClassController::class, 'testTrialToEmail']);

// wildcard
Route::get('/{slug}', [LandingController::class, 'articleShow'])->name('artikel.show');