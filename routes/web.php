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
Route::get('/', function () { return view('welcome');} );

Route::middleware('client')->group(function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/lesson/{id}', 'App\Http\Controllers\HomeController@lesson')->name('home.lesson');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name('admin.home.index');

    Route::get('/admin/users', 'App\Http\Controllers\AdminUserController@index')->name('admin.user.index');
    Route::post('/admin/users/store', 'App\Http\Controllers\AdminUserController@store')->name('admin.user.store');
    Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\AdminUserController@edit')->name('admin.user.edit');
    Route::put('/admin/users/{id}/update', 'App\Http\Controllers\AdminUserController@update')->name('admin.user.update');

    Route::get('/admin/lessons', 'App\Http\Controllers\AdminLessonController@index')->name('admin.lesson.index');
    Route::post('/admin/lessons/store', 'App\Http\Controllers\AdminLessonController@store')->name('admin.lesson.store');
    Route::delete('/admin/lessons/{id}/delete', 'App\Http\Controllers\AdminLessonController@delete')->name('admin.lesson.delete');
    Route::get('/admin/lessons/{id}/edit', 'App\Http\Controllers\AdminLessonController@edit')->name('admin.lesson.edit');
    Route::put('/admin/lessons/{id}/update', 'App\Http\Controllers\AdminLessonController@update')->name('admin.lesson.update');

    Route::get('/admin/lesson-tests', 'App\Http\Controllers\AdminLessonTestController@index')->name('admin.lesson-tests.index');
    Route::post('/admin/lesson-test/store', 'App\Http\Controllers\AdminLessonTestController@store')->name('admin.lesson-test.store');
    Route::delete('/admin/lesson-test/{id}/delete', 'App\Http\Controllers\AdminLessonTestController@delete')->name('admin.lesson-test.delete');
    Route::get('/admin/lesson-test/{id}/edit', 'App\Http\Controllers\AdminLessonTestController@edit')->name('admin.lesson-test.edit');
    Route::put('/admin/lesson-test/{id}/update', 'App\Http\Controllers\AdminLessonTestController@update')->name('admin.lesson-test.update');
});

Auth::routes();
