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
    return view('welcome');
});

Route::get('admin', 'App\Http\Controllers\UserController@index');
Route::get('admin/user', 'App\Http\Controllers\UserController@index')->name('user.index');

Route::get('admin/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');

Route::get('admin/establishment', 'App\Http\Controllers\EstablishmentController@index')->name('establishment.index');

Route::get('admin/photography', 'App\Http\Controllers\PhotographyController@index')->name('photography.index');

Route::get('admin/review', 'App\Http\Controllers\ReviewController@index')->name('review.index');

Route::get('user/{user}', 'UserController@show')->name('user.show');
Route::get('user/crear', 'UserController@create')->name('user.create');
Route::post('user/{user}', 'UserController@store')->name('user.store');
Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::patch('user/{user}', 'UserController@update')->name('user.update');
Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');