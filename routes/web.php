<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
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

Route::get('/{num}', 'App\Http\Controllers\GeneralController@getMain')->name('main');
Route::get('admin', 'App\Http\Controllers\GeneralController@getAdmin')->name('admin');

 //CRUD de usuarios

Route::get('admin/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::patch('admin/user/update/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::post('admin/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::delete('admin/user/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');
Route::get('admin/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::get('admin/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');

 //CRUD de categorías

Route::get('admin/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');
Route::patch('admin/category/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('admin/category/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
Route::get('admin/category/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('admin/category/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');

 //CRUD de establecimientos

Route::get('admin/establishment', 'App\Http\Controllers\EstablishmentController@index')->name('establishment.index');
Route::get('admin/establishment/edit/{id}', 'App\Http\Controllers\EstablishmentController@edit')->name('establishment.edit');
Route::get('admin/establishment/create', 'App\Http\Controllers\EstablishmentController@create')->name('establishment.create');
Route::patch('admin/establishment/update/{id}', 'App\Http\Controllers\EstablishmentController@update')->name('establishment.update');
Route::delete('admin/establishment/destroy/{id}', 'App\Http\Controllers\EstablishmentController@destroy')->name('establishment.destroy');
Route::post('admin/establishment/store', 'App\Http\Controllers\EstablishmentController@store')->name('establishment.store');

Route::get('admin/establishment/showAjax/{id}', 'App\Http\Controllers\EstablishmentController@showAjax')->name('establishment.showAjax');
Route::get('admin/establishment/showAjaxPhotography/{id}', 'App\Http\Controllers\EstablishmentController@showAjaxPhotography')->name('establishment.showAjaxPhotography');
Route::get('admin/establishment/showEstablishmentFind/{name}', 'App\Http\Controllers\EstablishmentController@showEstablishmentFind')->name('establishment.showEstablishmentFind');
Route::get('admin/establishment/showAjaxReview/{id}', 'App\Http\Controllers\EstablishmentController@showAjaxReview')->name('establishment.showAjaxReview');

 //CRUD de fotografías

Route::get('admin/photography', 'App\Http\Controllers\PhotographyController@index')->name('photography.index');
Route::patch('admin/photography/update/{id}', 'App\Http\Controllers\PhotographyController@update')->name('photography.update');
Route::delete('admin/photography/destroy/{id}', 'App\Http\Controllers\PhotographyController@destroy')->name('photography.destroy');
Route::get('admin/photography/create', 'App\Http\Controllers\PhotographyController@create')->name('photography.create');
Route::post('admin/photography/store', 'App\Http\Controllers\PhotographyController@store')->name('photography.store');
Route::get('admin/photography/edit/{id}', 'App\Http\Controllers\PhotographyController@edit')->name('photography.edit');

// CRUD de Reseñas

Route::get('admin/review', 'App\Http\Controllers\ReviewController@index')->name('review.index');
Route::patch('admin/review/update/{id}', 'App\Http\Controllers\ReviewController@update')->name('review.update');
Route::delete('admin/review/destroy/{id}', 'App\Http\Controllers\ReviewController@destroy')->name('review.destroy');
Route::get('admin/review/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('admin/review/store', 'App\Http\Controllers\ReviewController@store')->name('review.store');
Route::get('admin/review/edit/{id}', 'App\Http\Controllers\ReviewController@edit')->name('review.edit');
Route::get('admin/review/insertAjax/{id}/{name}/{rating}/{commentary}', 'App\Http\Controllers\ReviewController@insertAjax')->name('review.insertAjax');
