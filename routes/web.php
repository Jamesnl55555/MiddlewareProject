<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\RouteMiddleware;
use App\Http\Controllers\WebController;

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', [WebController::class, 'loginpage'])->name('loginpage');
Route::post('/login', [WebController::class, 'login'])->name('login');
Route::get('/registerpage', [ WebController::class, 'registerpage'])->name('registerpage');
Route::post('/register', [Webcontroller::class, 'register'])->name('register');

// Groups the specific routes to an alias of middleware
Route::middleware(['route'])->group(function(){
    Route::get('/dashboard', [WebController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [WebController::class, 'logout'])->name('logout');
});
// CREATE ROUTES 
