<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/board/{id}', [BoardController::class, 'index']);



Route::get('/login', [UserAuthController::class, 'indexLogin']);

Route::post('/login', [UserAuthController::class, 'login'])->name('user.login');

Route::get('/registrate', [UserAuthController::class, 'indexSignUp']);

Route::post('/registrate', [UserAuthController::class, 'registrate'])->name('user.registrate');

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/guideline', function () {
    return view('guideline');
});

Route::get("/{username}", [UserProfileController::class, 'index']);


