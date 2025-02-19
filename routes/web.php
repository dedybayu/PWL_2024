<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name = 'bayu') {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID: ' . $id;
});






Route::get('/', [PageController::class, 'hello']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles', [PageController::class, 'articles']);

route::get('/hello', [WelcomeControler::class, 'hello']);




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

