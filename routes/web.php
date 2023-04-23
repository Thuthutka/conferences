<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [\App\Http\Controllers\ConferencesController::class, 'index'])->name('home.index');



Route::get('/contact', static function () {
    return 'Contact';
    //return view('welcome');
})->name('home.contact');

/*Route::get('/articles/{id}', static function ($id) {
    return "article $id";
    //return view('welcome');
})->name('articles.show');
*/
//Route::resource('conferences', \App\Http\Controllers\ConferencesController::class)->only(['index', 'show', 'create', 'store']);
Route::resource('conferences', \App\Http\Controllers\ConferencesController::class);

Auth::routes();

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
