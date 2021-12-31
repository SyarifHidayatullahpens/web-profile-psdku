<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\AdminController;


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
    return view('user.index');
});

Route::prefix('news-galery')->group(function () {
    Route::get('/persetujuan', function() { 
        return view('admin.news-galery.persetujuan');
    });
    Route::get('/pengmas1', function() { 
        return view('admin.news-galery.pengmas1');
    });
    Route::get('/pengmas3', function() { 
        return view('admin.news-galery.pengmas3');
    });
 });

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', function () {
            return view('admin.home.index');
        });
        Route::get('/about/{id}', [App\Http\Controllers\AboutController::class, 'destroy']);
        Route::get('/departement/{id}', [App\Http\Controllers\DepartementController::class, 'destroy']);
        Route::get('/new/{id}', [App\Http\Controllers\NewsController::class, 'destroy']);

        Route::resource('abouts',   AboutController::class);
        Route::resource('news',   NewsController::class);
        Route::resource('pmbs',   PmbController::class);
        Route::resource('departements',   DepartementController::class);
        Route::resource('majors',   MajorController::class);
        Route::post('get-major', [DepartementController::class,'getMajor'])->name('get-major');
    });

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});