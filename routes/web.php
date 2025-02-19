<?php

use App\Http\Controllers\WelcomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '2341720041';
});

route::get('/hello', [WelcomeControler::class,'hello']);




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

// Route::get('/', function () {
//     return view('welcome');
// });

