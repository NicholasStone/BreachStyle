<?php

Route::get('video/progress', 'VideoController@progress')->name('video.progress');
Route::get('video/upload', 'VideoController@upload')->name('video.upload');
Route::get('video/download/{hash}', 'VideoController@download')->name('video.download');