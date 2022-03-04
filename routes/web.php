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

Route::get('/', function () {
    //return view('welcome');
    return view('studentregistration');

});
Route::resource('student', StudentsController::class);
Route::get('country-state-city','CountryStateDistrictController@index');
Route::post('get-states-by-country','CountryStateDistrictController@getState');
Route::post('get-cities-by-state','CountryStateDistrictController@getDistrict');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/students','StudentMasterController');

