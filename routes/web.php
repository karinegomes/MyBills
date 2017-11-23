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

Route::middleware('auth')->group(function() {
    Route::get('/', 'DashboardController@index');

    Route::resource('categories', 'CategoryController');

    Route::resource('expenses', 'ExpenseController');

    Route::get('test', function () {
        return response()->json('ndfjfj');
    });
});

Auth::routes();
