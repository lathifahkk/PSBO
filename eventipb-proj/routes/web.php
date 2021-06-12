<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\homeMhsController;
use App\Http\Controllers\deskEventController;

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


Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@checklogin')->name('checklogin');
Route::get('/login/homeOrg', 'App\Http\Controllers\LoginController@successlogin')->name('successlogin');
Route::get('/login/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

//

Route::get('form', 'App\Http\Controllers\EventController@index')->name('form');
Route::post('add','App\Http\Controllers\EventController@add')->name('add');

Route::get('homeMhs', 'App\Http\Controllers\homeMhsController@index')->name('homeMhs');
Route::get('konfirmasievent', 'App\Http\Controllers\deskEventController@index_event')->name('konfirmasievent');

//
Route::get('/infoTiket', function () {
    return view('infoTiket');
});