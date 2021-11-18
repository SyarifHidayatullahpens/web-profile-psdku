<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PmbController;



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

Auth::routes();
Route::get('/', function () {
    return view('user.home.index');
});

Route::get('/admin', function () {
    return view('admin.home.index');
});

Route::resource('abouts',   AboutController::class);
Route::resource('news',   NewsController::class);
Route::resource('pmbs',   PmbController::class);
Route::resource('departements',   DepartementController::class);
Route::resource('majors',   MajorController::class);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
