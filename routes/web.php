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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/users', 'App\Http\Controllers\AdminUserController@index')->name('admin.user.index');
Route::get('/admin/users/store', 'App\Http\Controllers\AdminUserController@store')->name('admin.user.store');
Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\AdminUserController@edit')->name('admin.user.edit');
Route::get('/admin/users/{id}/update', 'App\Http\Controllers\AdminUserController@update')->name('admin.user.update');

Auth::routes();
