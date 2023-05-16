<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Buat salam 
Route::get('/salam', function () {
    return view('Selamat datang');
});

//buat route kabar
Route::get('/kabar', function () {
    return view('Kondisi');
});

//buat route nilai
Route::get('/nilai', function () {
    return view('nilai');
});

//buat route pasien
Route::get('/pasien', function () {
    return view('pasien');
});

// buat routing form
route::get('/form', [FormController::class, 'index']);

//buat route hasil form
route::get('/hasil', [FormController::class, 'hasil']);
