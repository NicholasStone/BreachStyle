<?php
Route::get('statistics', 'StatisticsController@index')->name('admin.statistics.index');
Route::post('statistics/get', 'StatisticsController@get')->name('admin.statistics.get');