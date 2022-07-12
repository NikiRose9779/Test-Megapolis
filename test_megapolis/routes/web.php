<?php

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



Route::get('/', 'App\Http\Controllers\SomeController@home_page')->name('home');
Route::post('/some_client_reservet', 'App\Http\Controllers\SomeController@some_client_reservet')->name('some_client_reservet');
Route::post('/add_reservat', 'App\Http\Controllers\SomeController@submit')->name('add_reservat');
Route::get('/all_reservat', 'App\Http\Controllers\SomeController@all_reservet')->name('all_reservet');
Route::post('/some_reservet', 'App\Http\Controllers\SomeController@some_reservet')->name('some_reservet');
Route::get('/redact_resev/{id}', 'App\Http\Controllers\SomeController@redact_resev')->name('redact_resev');
Route::post('/redact_resev/{id}', 'App\Http\Controllers\SomeController@redact_resev_update')->name('redact_resev_update');
Route::get('/del_resev/{id}', 'App\Http\Controllers\SomeController@del_resev')->name('del_resev');
