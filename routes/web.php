<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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
    return view('welcome');
});


Route::view('/login', 'login')->middleware('guest');
Route::view('/register', 'register')->middleware('guest');

// menambahkan grup untuk autentikasi dan verifikasi email
Route::middleware(['auth', 'verified'])->group(function() {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('/about', 'about')->name('about')->middleware('auth');
});

// untuk load breze bawaan dari laravel
require __DIR__ . '/auth.php';
