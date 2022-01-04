<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\AdminController;


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

Route::prefix('ti')->group(function() {
    Route::get('/jadwal', function() {
        return view('user.ti.jadwal');
    });
    Route::get('/kurikulum', function() {
        return view('user.ti.kurikulum');
    });
    Route::get('/capaian-pembelajaran', function() {
        return view('user.ti.pencapaian ');
    });
    Route::get('/visi-misi', function() {
        return view('user.ti.visi-misi');
    });
});


Route::prefix('pmb')->group(function() {
    Route::get('/sbmpn', function () {
        return view('user.pmb.sbmpn');
    });
    Route::get('/snmpn', function () {
        return view('user.pmb.snmpn');
    });
    Route::get('/simandiri', function () {
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
    });

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});