<?php

use App\Http\Controllers\TestController;
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
    return view('welcome');
});

// Route::controller(TestController::class)->group(function(){
//     Route::get('/test', 'test')->name('test');
//     Route::get('/detail', 'detail')->name('detail');
// });

Route::prefix('admin')->group(function(){
    Route::get('/test', [TestController::class, 'test'])->name('test');
    Route::get('/detail', [TestController::class, 'detail'])->name('detail');
});