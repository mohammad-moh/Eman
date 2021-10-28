<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\BeardController;

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

//Route::get('/beard', function(){
 //   return view('Beards.beard');
//});

Route::namespace('BackEnd')->group(function(){
    Route::get('/beard', [BeardController::class, 'create']);
    Route::post('/beards/store', [BeardController::class, 'store'])->name('beard.store');
});
