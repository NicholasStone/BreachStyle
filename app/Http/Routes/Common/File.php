<?php

Route::get('file/progress', 'FileController@progress')->name('file.progress');
Route::get('file/upload', 'FileController@upload')->name('file.upload');
Route::get('file/download/{hash}', 'FileController@download')->name('file.download');