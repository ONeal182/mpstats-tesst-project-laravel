<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Compilation\CompilationController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mpstats', [App\Http\Controllers\MPStatsController::class, 'index'])->name('mpstats');
Route::get('/mpstats/product', [App\Http\Controllers\ProductMPController::class, 'index']);
Route::get('/mpstats/referenceitems', [App\Http\Controllers\ReferenceItems::class, 'index']);
Route::get('/mpstats/referenceitems/item', [App\Http\Controllers\ReferenceItems::class, 'indexItem']);
Route::post('/mpstats/referenceitems/date', [App\Http\Controllers\ReferenceItems::class, 'indexDate']);
Route::get('/mpstats/compilation/add', [CompilationController::class,'addView']);




