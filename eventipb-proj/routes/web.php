<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use App\Http\Controllers;

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

// Route::resource('login', LoginController::class, ['except' => ['create', 'edit']]);
Route::get('/', function () {
    return view('login');
});

// Route::resource('user', 'UserController');
// Route::get('login',[LoginController::class, 'postlogin']);
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@checklogin')->name('checklogin');
Route::get('/login/successlogin', 'App\Http\Controllers\LoginController@successlogin')->name('successlogin');
Route::get('/login/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// Route::post('/postlogin', 'LoginController@postLogin')->name('postLogin');

Route::get('/homeMhs', function () {
    return view('homeMhs');
});

// Route::get('/deskEvent', function () {
//     return view('deskEvent');
// });

// Route::get('/pendaftaranMhs', function () {
//     return view('pendaftaranMhs');
// });