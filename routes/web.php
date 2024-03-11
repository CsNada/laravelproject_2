<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

Route::get('/welcome', [firstController::class , 'welcomeView'])->name('welcomeRoute');

Route::get('/', [firstController::class , 'createAccountView'])->name('createAccountRoute');