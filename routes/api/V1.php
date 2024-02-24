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

//Route::get('/races', 'App\Http\Controllers\Api\V1\Race\RaceController@index')->name('index.races')->middleware('api');

Route::get('/grand_prix', 'App\Http\Controllers\Api\V1\GrandPrixController@index')->name('index.grand_prix');
Route::get('/schedule', 'App\Http\Controllers\Api\V1\ScheduleController@index')->name('index.schedule');


Route::get('/races', 'App\Http\Controllers\Api\V1\Race\RaceController@index')->name('index.races');
Route::get('/pilots', 'App\Http\Controllers\Api\V1\Pilot\PilotController@index')->name('index.pilots');
Route::get('/teams', 'App\Http\Controllers\Api\V1\Team\TeamController@index')->name('index.teams');
Route::get('/news', 'App\Http\Controllers\Api\V1\News\NewsController@getNews');
Route::get('/news/{news}', 'App\Http\Controllers\Api\V1\News\NewsController@getNewsById');
