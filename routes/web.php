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
    return view("admin/admin");
});

Route::get('admin', function () {
    return view("admin/admin");
});

Route::get('admin/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::patch('admin/user/update/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::post('admin/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::delete('admin/user/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');
Route::get('admin/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::get('admin/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');

Route::get('admin/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');
Route::patch('admin/category/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('admin/category/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
Route::get('admin/category/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('admin/category/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');

Route::get('admin/establishment', 'App\Http\Controllers\EstablishmentController@index')->name('establishment.index');

Route::get('admin/photography', 'App\Http\Controllers\PhotographyController@index')->name('photography.index');

Route::get('admin/review', 'App\Http\Controllers\ReviewController@index')->name('review.index');