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
Route::prefix('departement')->group(function() {
    Route::get('/ti', function () {
        return view('user.departements.it');
    });
    Route::get('/mmb', function () {
        return view('user.departements.mmb');
    });
});

Route::prefix('pmb')->group(function() {
    Route::get('/sbmpn', function () {
        return view('user.pmb.sbmpn');
    });
    Route::get('/snpmn', function () {
        return view('user.pmb.snmpn');
    });
    Route::get('/mmb', function () {
        return view('user.pmb.simandiri');
    });
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
<<<<<<< HEAD
        Route::get('/admin',[AdminController::class, 'index']);
        Route::get('/about/{id}', [AboutController::class, 'destroy']);
        Route::get('/departement/{id}', [DepartementController::class, 'destroy']);
        Route::get('/new/{id}', [NewsController::class, 'destroy']);
        Route::get('/pmb/{id}', [PmbController::class, 'destroy']);

        Route::resource('abouts',   AboutController::class);
        Route::resource('news',   NewsController::class);
        Route::resource('pmbs',   PmbController::class);
        Route::resource('departements',   DepartementController::class);
        Route::resource('majors',   MajorController::class);
        Route::post('get-major', [DepartementController::class,'getMajor'])->name('get-major');
=======
        Route::prefix('admin')->group(function () {
            Route::get('/',[AdminController::class, 'index']);
            Route::get('/about/{id}', [AboutController::class, 'destroy']);
            Route::get('/departement/{id}', [DepartementController::class, 'destroy']);
            Route::get('/new/{id}', [NewsController::class, 'destroy']);
            Route::resource('abouts',   AboutController::class);
            Route::resource('news',   NewsController::class);
            Route::resource('pmbs',   PmbController::class);
            Route::resource('departements',   DepartementController::class);
            Route::resource('majors',   MajorController::class);
            Route::post('get-major', [DepartementController::class,'getMajor'])->name('get-major');
        });
>>>>>>> 435932e02c48527904a4f73db542c3820a5c4171
    });

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});