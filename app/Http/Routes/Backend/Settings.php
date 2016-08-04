<?php
Route::get('settings', 'SettingsController@index')->name('admin.setting.index');
Route::post('settings/create' ,'SettingsController@store')->name('admin.setting.store');
Route::post('settings/upload', 'SettingsController@upload')->name('admin.setting.upload');
Route::post('settings/crop', 'SettingsController@crop')->name('admin.setting.crop');
Route::post('settings/get', 'SettingsController@get')->name('admin.setting.get');
Route::get('settings/delete/{link}', 'SettingsController@delete')->name('admin.setting.delete');

Route::post('settings/frontend', 'SettingsController@applies')->name('admin.setting.frontend.index');

Route::get('university', 'UniversityController@index')->name('admin.university.index');
Route::post('university/get', 'UniversityController@get')->name('admin.university.get');
Route::post('university/create', 'UniversityController@store')->name('admin.university.store');
Route::get('university/delete/{id}', 'UniversityController@delete')->name('admin.university.delete');
