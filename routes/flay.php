<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\FlayController;
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


Route::namespace('BackEnd')->group(function(){
    Route::get('/flay', function () {
        return view('BackEnd.flay');
    });
    Route::post('flay/store', [FlayController::class, 'store'])->name('flay.store');
});
