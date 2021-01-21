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
    return view('admin');
});

Route::get('admin', 'App\Http\Controllers\UserController@index');
Route::get('admin/user', 'App\Http\Controllers\UserController@index')->name('user.index');

Route::get('admin/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');
Route::patch('admin/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('admin/destroy{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
Route::get('admin/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('admin/store', 'App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('admin/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');

Route::get('admin/establishment', 'App\Http\Controllers\EstablishmentController@index')->name('establishment.index');

Route::get('admin/photography', 'App\Http\Controllers\PhotographyController@index')->name('photography.index');

Route::get('admin/review', 'App\Http\Controllers\ReviewController@index')->name('review.index');