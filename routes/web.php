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
Route::get('/register', 'AuthController@getRegister' )->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister' )->name('post.register')->middleware('guest');

Route::get('/login', 'AuthController@getLogin' )->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin' )->name('post.login')->middleware('guest');

Route::get('/logout','AuthController@logout')->name('logout')->middleware('auth');


//
Route::get('/bagian/login', 'AuthBagianController@getLogin')->name('bagian.login.get');
Route::post('/bagian/login', 'AuthBagianController@postLogin')->name('bagian.login.post');
Route::get('/bagian/logout', 'AuthBagianController@logout')->name('bagian.logout');




###########################
Route::group(['middleware' => ['auth']], function () {
    //home
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

//Permintaan
Route::resource('/permintaan', 'PermintaanController');
Route::get('/bagian/permintaan','PermintaanCOntroller@bagianIndex')->name('bagian.permintaan.index');
Route::get('table/permintaan','PermintaanController@dataTable')->name('table.permintaan');
Route::get('/permintaan_temp', function () {
    return view('permintaan_temp');
});
 
//disposisi
Route::get('/disposisi','DisposisiController@index')->name('disposisi.index');
Route::post('/disposisi/store','DisposisiController@store')->name('disposisi.store');
Route::get('/disposisi/{disposisi}','DisposisiController@show')->name('disposisi.show');
//

//jadwal
Route::get('/jadwal_temp', function () { 
    return view('pages.Jadwal_permintaan.jadwal_entri');
});



//bagian
Route::get('/bagian/index','PagesBagianController@index')->name('bagian.index');


//user
Route::get('/management/user','UserManagementController@index')->name('user.management.index');

});


