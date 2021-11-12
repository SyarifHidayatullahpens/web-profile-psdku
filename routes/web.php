<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/admin', function () {
//     return view('admin.home.index');
// });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return view('admin.home.index');});
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
