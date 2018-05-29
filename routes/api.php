<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categories/list', 'CategoryController@ajaxGetCategories');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@destroy');

Route::get('family-members/list', 'FamilyMemberController@ajaxGetAll');
Route::resource('family-members', 'FamilyMemberController')->only(['store', 'update', 'destroy']);

Route::get('periods/list', 'PeriodController@ajaxGetAll');
Route::resource('periods', 'PeriodController')->only(['store', 'update']);