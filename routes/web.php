<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/index', function() {
    return view('index');
});

Route::get('/cartera', function() {
    return view('home_cm');
});

Route::get('/graph', function() {
    $user = \Auth::user();
    
    $incomes = DB::table('income')->where('u_id', $user['id'])-> get();
    $expenses = DB::table('expenses')->where('u_id',$user['id'])->get();

    return view('graph',['incomes' => $incomes],['expenses' => $expenses]);
});

Route::get('/calender', function() {
    return view('calender');
});

Route::get('/setting', function() {
    return view('setting');
});


