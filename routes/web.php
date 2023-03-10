<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
})->name('Welcome');
Route::get('daftar', function () {
    return view('Register');
})->name('daftar');
Route::get('lowongan-kerja', function () {
    return view('JobVacancy');
})->name('lowongan-kerja');
Route::get('detail-pekerjaan', function () {
    return view('JobDetail');
})->name('detail-pekerjaan');
Route::get('profile-perusahaan', function () {
    return view('CompanyProfile');
})->name('profile-perusahaan');
Route::get('berita', function () {
    return view('Blog');
})->name('berita');
Route::get('tentang-kami', function () {
    return view('AboutMe');
})->name('tentang-kami');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
