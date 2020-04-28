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

Route::get('dashboard', function() {

})->name('dashboard.index');
