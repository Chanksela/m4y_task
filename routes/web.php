<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JoomlaUserAuth;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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

Route::redirect('/', '/dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/signup', [AuthController::class, 'signUp'])->name('signup');
    Route::get('/signin', [AuthController::class, 'signIn'])->name('signin');
    Route::post('/signin', [JoomlaUserAuth::class, 'signIn'])->name('joomla.signin');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});
Route::middleware('joomla.auth')->group(function () {
    Route::get('/signout', [JoomlaUserAuth::class, 'signOut'])->name('joomla.signout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
