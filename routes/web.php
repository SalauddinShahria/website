<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Website Routes are here
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Backend Admin Routes are here
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function(){
	Route::get('/dashboard', 'App\Http\Controllers\Backend\PagesController@index')->name('dashboard');

	//Brnd Route for CRUD
	Route::group(['prefix' => 'brand'], function(){
		Route::get('/manage', 'App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');

		Route::get('/create', 'App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
		Route::post('/store', 'App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
		Route::get('/edit{id}', 'App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
		Route::post('/edit{id}', 'App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
		Route::post('/delete{id}', 'App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
	});

	//Category Route for CRUD
	Route::group(['prefix' => 'category'], function(){
		Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');

		Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
		Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store')->name('category.store');
		Route::get('/edit{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');
		Route::post('/edit{id}', 'App\Http\Controllers\Backend\CategoryController@update')->name('category.update');
		Route::post('/delete{id}', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
	});

	//Product Route for CRUD
	Route::group(['prefix' => 'product'], function(){
		Route::get('/manage', 'App\Http\Controllers\Backend\productController@index')->name('product.manage');

		Route::get('/create', 'App\Http\Controllers\Backend\productController@create')->name('product.create');
		Route::post('/store', 'App\Http\Controllers\Backend\productController@store')->name('product.store');
		Route::get('/edit{id}', 'App\Http\Controllers\Backend\productController@edit')->name('product.edit');
		Route::post('/edit{id}', 'App\Http\Controllers\Backend\productController@update')->name('product.update');
		Route::post('/delete{id}', 'App\Http\Controllers\Backend\productController@destroy')->name('product.destroy');
	});

});