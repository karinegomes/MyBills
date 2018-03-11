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

    // Categories
    Route::resource('categories', 'CategoryController');

    // Family members
    Route::resource('family-members', 'FamilyMemberController', ['only' => 'index']);

    // Expenses
    Route::resource('expenses', 'ExpenseController');
});

Auth::routes();
