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
    return view('welcome');
})->name('login');

Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login.twitch');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback')->name('login.twitch.callback');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::name('dashboard.')->namespace('Dashboard')->prefix('dash')->middleware(['auth', 'auth.author'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('categories', function () {
        return 'lol';
    })->name('categories');
});
