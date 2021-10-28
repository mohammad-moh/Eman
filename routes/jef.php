<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\JetController;
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

//Route::get('/jegit', function(){
//    return view('Beards/jefht');
//});
Route::namespace('BackEnd')->group(function(){
    Route::get('/jef', [JetController::class, 'create']);
    Route::post('/jef/store', [JetController::class, 'store'])->name('post.store');
});
