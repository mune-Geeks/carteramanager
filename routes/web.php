<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/graph', [\App\Http\Controllers\GraphController::class,'index'])->name('home');
Route::get('/editname', [App\Http\Controllers\Auth\ChangeNameController::class, 'index'])->name('home');

Route::post('/changename',[App\Http\Controllers\Auth\ChangeNameController::class,'update'])->name('update');



Route::get('/index', function() {
    return view('index');
});

Route::get('/cartera', function() {
    return view('home_cm');
});



Route::get('/calender', function() {
    return view('calender');
});

Route::get('/setting', function() {
    return view('setting');
});


Auth::routes();

Route::get('/repswd', [App\Http\Controllers\Auth\ChangePasswordController::class, 'index'])->name('index');
Route::get('/password/change', [App\Http\Controllers\Auth\ChangePasswordController::class, 'edit'])->name('edit');
Route::post('/password/change', [App\Http\Controllers\Auth\ChangePasswordController::class, 'update'])->name('update');

