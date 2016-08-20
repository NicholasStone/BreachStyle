<?php
Route::get('statistics', 'StatisticsController@index')->name('admin.statistics.index');
Route::get('statistics/get', 'StatisticsController@get')->name('admin.statistics.get');