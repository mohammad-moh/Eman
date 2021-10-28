<?php

use App\Http\Controllers\bigController;
use App\Http\Controllers\CommUserController;
use App\Http\Controllers\docPatController;
use App\Http\Controllers\EmanController;
use App\Http\Controllers\gefUserController;
use App\Http\Controllers\gittController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\houseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LusyController;
use App\Http\Controllers\modoController;
use App\Http\Controllers\moonController;
use App\Http\Controllers\nurDeptController;
use App\Http\Controllers\opController;
use App\Http\Controllers\PersoneController;
use App\Http\Controllers\PharPatioController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\WidController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_ele', [CommUserController::class, 'createEle']);
Route::get('/add_item', [gefUserController::class, 'getsEle']);

Route::get('/add_user', [modoController::class, 'getEle']);

// gittController class
Route::get('/adding', [gittController::class, 'getData']);

//This route for opController controller class
Route::get('/ss', [opController::class, 'getOp']);
Route::get('/get-item/{id}', [opController::class,'getUserById']);

Route::get('/get-moon', [moonController::class, 'getItemById']);
Route::get('return-moon/{id}', [moonController::class, 'getId']);


Route::get('/add-doctor', [docPatController::class, 'addDoctor']);
Route::get('/add-patient/{id}', [docPatController::class, 'addPatient']);

Route::get('/add-nurse', [nurDeptController::class, 'addNurse']);
Route::get('/add-dept/{id}', [nurDeptController::class, 'addDept']);
Route::get('/get-word/{id}', [nurDeptController::class, 'getWord']);
Route::get('/get-nurse/{id}', [nurDeptController::class, 'getNurse']);
Route::get('/get-word-by-nurse/{id}', [nurDeptController::class, 'getWordByNurse']);

Route::get('/get-pharma', [PharPatioController::class, 'addPharma']);
Route::get('/get-pationt/{id}', [PharPatioController::class, 'addPationt']);
Route::get('/getpabypharm/{id}', [PharPatioController::class, 'getPatientByPharma']);
Route::get('/getpharmbypatient/{id}', [PharPatioController::class, 'getphramBypatient']);
Route::get('/getallele', [PharPatioController::class, 'getAllElements']);
Route::get('/get-all-pharma', [PharPatioController::class, 'getAllPatients']);

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/get-Input', [LoginController::class, 'getInput'])->name('get.input');
Route::post('/get-str', [LoginController::class, 'getStr'])->name('get.str');


Route::get('/lusy', [LusyController::class, 'loss'])->name('lusy.loos');
Route::post('/getit', [LusyController::class, 'getLusy'])->name('get.lusy');

Route::get('log-big', [bigController::class, 'logBig'])->name('log.big');
Route::post('/save-date', [bigController::class, 'saveDate'])->name('post.date');
Route::get('/get-url', [bigController::class, 'getUrl']);

Route::get('/index-rest', [RestController::class, 'indexRest'])->name('get.rest');
Route::post('/get-rest', [RestController::class, 'getRest'])->name('get.rest');


Route::get('/house', [houseController::class, 'logHouse'])->name('log.house');
Route::post('/get-house',[houseController::class, 'getHouse'])->name('get.house');

Route::get('/home-view', [HomeController::class, 'homeView'])->name('home.view');
route::post('/get-home', [HomeController::class, 'gethome'])->name('get.home');

Route::get('/wid-view', [WidController::class, 'widView'])->name('wid.view');
Route::post('/get-wid', [WidController::class, 'getWid'])->name('get.wid');

Route::get('/get-all-ele',[HomeController::class, 'getAllEle'])->name('get.element');
Route::get('/homeid/{id}', [HomeController::class, 'getHomeById'])->name('get.homeid');

Route::get('/pero', [PersoneController::class, 'getsAllElement'])->name('pero');
Route::get('/person-id/{id}', [PersoneController::class, 'GetEleById'])->name('get.person');

Route::get('/get-eman', [EmanController::class, 'getAllEle']);
Route::get('/get-one/{id}', [EmanController::class, 'getOne'])->name('get.one');
Route::get('/delete-raw/{id}', [EmanController::class, 'deleteItem'])->name('raw.delete');
