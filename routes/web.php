<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BoardController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/board/{id}', [BoardController::class, 'index']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/guideline', function () {
    return view('guideline');
});
