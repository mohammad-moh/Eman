<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\PostController;

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


//Route::get('/post', function(){
//    return view('BackEnd.post');
//});
route::namespace('BackEnd')->group(function(){
    route::get('/post', [PostController::class, 'create']);
    Route::post('post/store', [PostController::class, 'store'])->name('post.store');
});
