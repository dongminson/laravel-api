<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('words', 'WordsController@index');
Route::get('words/{id}', 'WordsController@show');
Route::post('words', 'WordsController@store');
Route::put('words/{word}', 'WordsController@update');
Route::delete('words/{word}', 'WordsController@delete');

Route::get('definitions', 'DefinitionsController@index');
Route::get('definitions/{id}', 'DefinitionsController@show');
Route::post('definitions', 'DefinitionsController@store');
Route::put('definitions/{definition}', 'DefinitionsController@update');
Route::delete('definitions/{definition}', 'DefinitionsController@delete');
