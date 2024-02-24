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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
});

Route::post('/users/signup', '\App\Http\Controllers\Api\User\UserController@storeUser');

Route::get('/grand_prix', 'App\Http\Controllers\Api\V1\GrandPrixController@index')->name('index.grand_prix');
Route::get('/schedule', 'App\Http\Controllers\Api\V1\ScheduleController@index')->name('index.schedule');
Route::get('/pilots', 'App\Http\Controllers\Api\V1\PilotController@index')->name('index.pilots');
Route::get('/teams', 'App\Http\Controllers\Api\V1\TeamController@index')->name('index.teams');

Route::get('/news', 'App\Http\Controllers\Api\V1\NewsController@index')->name('index.news');
Route::get('/news/{id}', 'App\Http\Controllers\Api\V1\NewsController@show')->name('show.news');
