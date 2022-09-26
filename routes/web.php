<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/{any}', [\App\Http\Controllers\SpaController::class, 'index'])->where('any','^(?!login|register|forgot-password|reset-password*|verify-email|email/verification-notification*).*$')->middleware('auth');

require __DIR__.'/auth.php';
