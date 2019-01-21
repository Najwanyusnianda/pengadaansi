<?php

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

//Auth route
Route::get('/register', 'AuthController@getRegister' )->middleware('guest');
Route::post('/register', 'AuthController@postRegister' )->name('post.register')->middleware('guest');

Route::get('/login', 'AuthController@getLogin' )->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin' )->name('post.login')->middleware('guest');

Route::get('/logout','AuthController@logout')->name('logout')->middleware('auth');





Route::group(['middleware' => ['auth']], function () {
    //home
    Route::get('/dashboard','DashboardController@index')->name('dashboard')->middleware('auth');
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    //Permintaan
Route::resource('/permintaan', 'PermintaanController');
Route::get('table/permintaan','PermintaanController@dataTable')->name('table.permintaan');

 
});