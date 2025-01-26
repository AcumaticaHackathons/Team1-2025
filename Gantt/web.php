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



Route::get('/', 'Controller@timecard')->name('timecard');

Route::post('timeIn', 'Controller@timeIn')->name('timeIn');
Route::post('timeOut', 'Controller@timeOut')->name('timeOut');

Route::post('lunchIn', 'Controller@lunchIn')->name('lunchIn');
Route::post('lunchOut', 'Controller@lunchOut')->name('lunchOut');

Route::post('breakIn', 'Controller@breakIn')->name('breakIn');
Route::post('breakOut', 'Controller@breakOut')->name('breakOut');

Route::get('report', 'Controller@report')->name('report');

Route::post('dateSearch', 'Controller@dateSearch')->name('dateSearch');

Route::get('hackathon', 'Controller@hackathon')->name('hackathon');
Route::get('data', 'Controller@hackathonData')->name('data');
