<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

/*Route::get('/ert', function () {
    return view('index');
})->middleware(['auth'])->name('index');*/

//Route::get('/autre', [MainController::class, 'index']);
Route::get('/autre', [PostsController::class, 'index']);
Route::resource('/jeu', PostsController::class);

Route::resource('/profil', AuthenticatedSessionController::class);

Route::get('/recherche', [MainController::class, 'search'])->name('recherche');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/poste', function () {
    return view('poste');
});

/*Route::get('/profile', [MainController::class, 'profile']);*/

require __DIR__.'/auth.php';
