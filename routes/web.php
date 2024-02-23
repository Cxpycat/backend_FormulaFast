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

Route::get('/', \App\Http\Controllers\Main\Admin\IndexController::class)->name('admin.index');
//Route::get('/', function () {
//    $tracks = \App\Models\Track::all();
//    foreach ($tracks as $track) {
//        echo "Track - " . $track['title'] . "<br>";
//
//        echo "Country - " . $track->country['title'] . "<br>";
//    }
//})->name('admin.index');

Route::group(['prefix' => 'countries'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\Country\IndexCountry::class)->name('country.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\Country\CreateCountry::class)->name('country.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\Country\StoreCountry::class)->name('country.store');
    Route::get('/{country}/edit', \App\Http\Controllers\Main\Admin\Country\EditCountry::class)->name('country.edit');
    Route::patch('/{country}', \App\Http\Controllers\Main\Admin\Country\UpdateCountry::class)->name('country.update');
    Route::delete('/{country}', \App\Http\Controllers\Main\Admin\Country\DeleteCountry::class)->name('country.delete');
});

Route::group(['prefix' => 'tracks'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\Track\IndexTrack::class)->name('track.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\Track\CreateTrack::class)->name('track.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\Track\StoreTrack::class)->name('track.store');
    Route::get('/{track}/edit', \App\Http\Controllers\Main\Admin\Track\EditTrack::class)->name('track.edit');
    Route::patch('/{track}', \App\Http\Controllers\Main\Admin\Track\UpdateTrack::class)->name('track.update');
    Route::delete('/{track}', \App\Http\Controllers\Main\Admin\Track\DeleteTrack::class)->name('track.delete');
});

Route::group(['prefix' => 'teams'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\Team\IndexTeam::class)->name('team.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\Team\CreateTeam::class)->name('team.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\Team\StoreTeam::class)->name('team.store');
    Route::get('/{team}/edit', \App\Http\Controllers\Main\Admin\Team\EditTeam::class)->name('team.edit');
    Route::patch('/{team}', \App\Http\Controllers\Main\Admin\Team\UpdateTeam::class)->name('team.update');
    Route::delete('/{team}', \App\Http\Controllers\Main\Admin\Team\DeleteTeam::class)->name('team.delete');
});

Route::group(['prefix' => 'pilots'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\Pilot\IndexPilot::class)->name('pilot.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\Pilot\CreatePilot::class)->name('pilot.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\Pilot\StorePilot::class)->name('pilot.store');
    Route::get('/{pilot}/edit', \App\Http\Controllers\Main\Admin\Pilot\EditPilot::class)->name('pilot.edit');
    Route::patch('/{pilot}', \App\Http\Controllers\Main\Admin\Pilot\UpdatePilot::class)->name('pilot.update');
    Route::delete('/{pilot}', \App\Http\Controllers\Main\Admin\Pilot\DeletePilot::class)->name('pilot.delete');
});

Route::group(['prefix' => 'races'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\Race\IndexRace::class)->name('race.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\Race\CreateRace::class)->name('race.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\Race\StoreRace::class)->name('race.store');
    Route::delete('/{race}', \App\Http\Controllers\Main\Admin\Race\DeleteRace::class)->name('race.delete');
});

Route::group(['prefix' => 'result_race'], function () {
    Route::get(
        '/{race_id}/edit',
        \App\Http\Controllers\Main\Admin\ResultRace\EditRaceResult::class
    )->name('result_race.edit');
    Route::patch(
        '/',
        \App\Http\Controllers\Main\Admin\ResultRace\UpdateRaceResult::class
    )->name('result_race.update');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', \App\Http\Controllers\Main\Admin\News\IndexNews::class)->name('news.index');
    Route::get('/create', \App\Http\Controllers\Main\Admin\News\CreateNews::class)->name('news.create');
    Route::post('/', \App\Http\Controllers\Main\Admin\News\StoreNews::class)->name('news.store');
    Route::get('/{news}/edit', \App\Http\Controllers\Main\Admin\News\EditNews::class)->name('news.edit');
    Route::patch('/{news}', \App\Http\Controllers\Main\Admin\News\UpdateNews::class)->name('news.update');
    Route::delete('/{news}', \App\Http\Controllers\Main\Admin\News\DeleteNews::class)->name('news.delete');
});
