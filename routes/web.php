<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes
Route::middleware(['auth'])->group(function() {
    // Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('can:roles.create');
    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('can:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('can:roles.create');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('can:roles.edit');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('can:roles.show');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('can:roles.destroy');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('can:roles.edit');

    // Products
    Route::post('posts/store', 'PostController@store')->name('posts.store')->middleware('can:posts.create');
    Route::get('posts', 'PostController@index')->name('posts.index')->middleware('can:posts.index');
    Route::get('posts/create', 'PostController@create')->name('posts.create')->middleware('can:posts.create');
    Route::put('posts/{role}', 'PostController@update')->name('posts.update')->middleware('can:posts.edit');
    Route::get('posts/{role}', 'PostController@show')->name('posts.show')->middleware('can:posts.show');
    Route::delete('posts/{role}', 'PostController@destroy')->name('posts.destroy')->middleware('can:posts.destroy');
    Route::get('posts/{role}/edit', 'PostController@edit')->name('posts.edit')->middleware('can:posts.edit');

    // Users
    Route::get('users', 'UserController@index')->name('users.index')->middleware('can:users.index');
    Route::put('users/{role}', 'UserController@update')->name('users.update')->middleware('can:users.edit');
    Route::get('users/{role}', 'UserController@show')->name('users.show')->middleware('can:users.show');
    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')->middleware('can:users.destroy');
    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')->middleware('can:users.edit');
});