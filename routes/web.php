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
    return redirect('home');
});

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'CheckLogin'], function () {
    Route::get('home', 'HomeController@index')->name('admin.home.index');


    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@index')->name('admin.post.index');

        Route::get('create', 'PostController@createShow')->name('admin.post.createShow');
        Route::post('create', 'PostController@create')->name('admin.post.create');

        Route::get('edit/{id}', 'PostController@editShow')->name('admin.post.editShow');
        Route::post('update/{id}', 'PostController@update')->name('admin.post.update');

        Route::get('delete/{id}', 'PostController@delete')->name('admin.post.delete');

        Route::get('search', 'PostController@search')->name('admin.post.search');

        Route::post('upload', 'PostController@upload')->name('admin.post.upload');
    });

    Route::group(['prefix' => 'category', 'middleware' => 'CheckRoleAdmin'], function () {
        Route::get('/', 'CategoryController@index')->name('admin.category.index');

        Route::get('create', 'CategoryController@createShow')->name('admin.category.createShow');
        Route::post('create', 'CategoryController@create')->name('admin.category.create');

        Route::get('edit/{id}', 'CategoryController@editShow')->name('admin.category.editShow');
        Route::post('update/{id}', 'CategoryController@update')->name('admin.category.update');

        Route::get('delete/{id}', 'CategoryController@delete')->name('admin.category.delete');

        Route::get('search', 'CategoryController@search')->name('admin.category.search');
    });

    Route::group(['prefix' => 'user', 'middleware' => 'CheckRoleAdmin'], function () {
        Route::get('/', 'UserController@index')->name('admin.user.index');

        Route::get('create', 'UserController@createShow')->name('admin.user.createShow');
        Route::post('create', 'UserController@create')->name('admin.user.create');

        Route::get('edit/{id}', 'UserController@editShow')->name('admin.user.editShow');
        Route::post('update/{id}', 'UserController@update')->name('admin.user.update');
        Route::post('updatePassword/{id}', 'UserController@updatePassword')->name('admin.user.updatePassword');

        Route::get('delete/{id}', 'UserController@delete')->name('admin.user.delete');

        Route::get('search', 'UserController@search')->name('admin.user.search');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('home', 'HomeController@index')->name('site.home.index');

    Route::get('logout', 'AccountController@logout')->name('site.account.logout');

    Route::group(['middleware' => 'CheckAccount'], function () {
        Route::get('login', 'AccountController@loginShow')->name('site.account.loginShow');
        Route::post('login', 'AccountController@login')->name('site.account.login');
    });
});
