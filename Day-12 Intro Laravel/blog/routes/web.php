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

use App\Http\Controllers\GenreController;

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/send', 'AuthController@send');

    Route::get('/master', function () {
        return view('halaman.master');
    });

    Route::get('/data-table', function () {
        return view('halaman.datatable');
    });

    Route::get('/table', function () {
        return view('halaman.table');
    });

    Route::get('/cast', 'CastController@index');
    Route::get('/cast/create', 'CastController@create');
    Route::post('/cast', 'CastController@store');
    Route::get('/cast/{cast_id}', 'CastController@show');
    Route::get('/cast/{cast_id}/edit', 'CastController@edit');
    Route::put('/cast/{cast_id}', 'CastController@update');
    Route::delete('/cast/{cast_id}', 'CastController@destroy');
    Route::resource('genre', 'GenreController');
    Route::resource('profile','ProfileController');

});
Route::resource('film', 'FilmController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

