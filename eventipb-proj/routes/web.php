<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// // use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use App\Http\Controllers;
// use App\Http\Controllers\homeMhsController;
// use App\Http\Controllers\deskEventController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Org\OrgController;
use App\Http\Controllers\EventController;


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
    return view('welcome');
});

Route::get('homeMhs', 'App\Http\Controllers\homeMhsController@index')->name('homeMhs');
Route::get('detail/{idevent}', 'App\Http\Controllers\homeMhsController@detail')->name('detail');


// Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@checklogin')->name('checklogin');
// Route::get('/login/homeOrg', 'App\Http\Controllers\LoginController@successlogin')->name('successlogin');
// Route::get('/login/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// Route::get('homeMhs', 'App\Http\Controllers\homeMhsController@index')->name('homeMhs');
// Route::get('konfirmasievent', 'App\Http\Controllers\deskEventController@index_event')->name('konfirmasievent');

//

Auth::routes();

// Route::get('/user/detail/{$id_event}', [EventController::class,'index'])->name('detail');

// Route::get('/user/detail/{$id_event}', [UserController::class,'detail'])->name('detail');

// Route::prefix('user')->group(function(){
//     Route::get('/detail/{$id_event}', function(Request $request, $id_event){
//         return view('welcome');
//     });
// });

Route::prefix('user')->name('user.')->group(function(){
    // Route::get('/detail/{$id_event}', function(Request $request, $id_event){
    //     return view('welcome');
    // });

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
          
        });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        // Route::get('/detail/{$id_event}', 'App\Http\Controllers\EventController@index')->name('detail');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::get('/add-new',[UserController::class,'add'])->name('add');
    });
    
    // Route::get('/detail/{$id_event}', [UserController::class,'detail'])->name('detail');

    // Route::post('/home',[EventController::class,'show'] );
});

Route::prefix('org')->name('org.')->group(function(){

    Route::middleware(['guest:org','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.org.login')->name('login');
         Route::view('/register','dashboard.org.register')->name('register');
         Route::post('/create',[OrgController::class,'create'])->name('create');
         Route::post('/check',[OrgController::class,'check'])->name('check');
    });

    Route::middleware(['auth:org','PreventBackHistory'])->group(function(){
         Route::view('/home','dashboard.org.home')->name('home');
         Route::post('logout',[OrgController::class,'logout'])->name('logout');
         Route::view('/eventcreate','dashboard.org.eventcreate')->name('eventcreate');
        //  Route::get('form', 'App\Http\Controllers\EventController@index')->name('form');
         Route::post('add','App\Http\Controllers\EventController@add')->name('add');

    });
});

