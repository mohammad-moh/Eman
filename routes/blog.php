<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\BlogController;
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
//Route::get('/blog', function(){
//    return view('BackEnd.blog');
//});
Route::namespace('BackEnd')->group(function(){
    Route::get('/blog', [BlogController::class, 'create']);
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
  
});