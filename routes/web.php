<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    return view('user.home');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/order', [HomeController::class, 'order']);
Route::get('/order/{datum}', [HomeController::class, 'foglalas']);

/* Kapcsolat-email */
Route::get('/sendemail', [HomeController::class, 'sendemail']);
Route::post('/sendemail/send', [HomeController::class, 'send']);


Auth::routes();


/*ADMIN*/
Route::get('/kapu', function () {
    return view('admin.admin');
});
/*Dolgozók routes */
Route::get('/kapu/dolgozok', [AdminController::class, 'dolgozoList']);
Route::get('/kapu/dolgozo/new', [AdminController::class, 'dolgozoCreate']);
Route::get('/kapu/dolgozo/show/{id}', [AdminController::class, 'dolgozoShow']);
Route::post('/kapu/dolgozo/store', [AdminController::class, 'dolgozoStore']);
Route::get('/kapu/dolgozo/edit/{id}', [AdminController::class, 'dolgozoEdit']);
Route::put('/kapu/dolgozo/update/{id}', [AdminController::class, 'dolgozoUpdate']);
Route::get('/kapu/dolgozo/passiv/{id}', [AdminController::class, 'dolgozoPassiv']);


/*Gépek routes */
Route::get('/kapu/gepek', [AdminController::class, 'gepList']);
Route::get('/kapu/gep/new', [AdminController::class, 'gepCreate']);
Route::get('/kapu/gep/show/{id}', [AdminController::class, 'gepShow']);
Route::post('/kapu/gep/store', [AdminController::class, 'gepStore']);
Route::get('/kapu/gep/edit/{id}', [AdminController::class, 'gepEdit']);
Route::put('/kapu/gep/update/{id}', [AdminController::class, 'gepUpdate']);
Route::get('/kapu/gep/passiv/{id}', [AdminController::class, 'gepPassiv']);


/*Autók routes */
Route::get('/kapu/autok', [AdminController::class, 'autoList']);
Route::get('/kapu/auto/new', [AdminController::class, 'autoCreate']);
Route::get('/kapu/auto/show/{id}', [AdminController::class, 'autoShow']);
Route::post('/kapu/auto/store', [AdminController::class, 'autoStore']);
Route::get('/kapu/auto/edit/{id}', [AdminController::class, 'autoEdit']);
Route::put('/kapu/auto/update/{id}', [AdminController::class, 'autoUpdate']);
Route::get('/kapu/auto/passiv/{id}', [AdminController::class, 'autoPassiv']);


/*Rendelések routes */
Route::get('kapu/rendelesek', function () {

    return view('admin.megrendelesList');

})->middleware(['auth']);

Route::get('/kapu/rendeles/update/{id}', [AdminController::class, 'rendelesUpdate']);


/*Felhasználók routes */
Route::get('/kapu/felhasznalok', [AdminController::class, 'felhasznaloList']);


