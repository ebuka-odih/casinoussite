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

Route::view('/', 'pages.index')->name('index');
Route::view('daily-lotto', 'pages.daily-lotto')->name('daily_lotto');
Route::view('lotteries', 'pages.lotteries')->name('lotteries');
Route::view('specials-common', 'pages.specials-common')->name('specials_common');
Route::view('results', 'pages.results')->name('results');
Route::view('play/lottery', 'pages.play')->name('play');
Route::view('demo', 'pages.demo')->name('demo');

Route::post('play/', 'PlayLottoController@playLotto')->name('playLotto');
