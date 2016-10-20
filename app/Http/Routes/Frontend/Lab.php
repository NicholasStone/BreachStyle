<?php
Route::get('/lab', 'LabController@index_lab');
Route::get('/lab/play', 'LabController@play')->name('upload');

Route::get('/lab/youku/', 'LabController@youku');
Route::get('/lab/youku/play', 'LabController@youkuPlay')->name('frontend.lab.play');
Route::post('/lab/youku/upload', 'LabController@youkuUpload')->name('frontend.course.store.lab');