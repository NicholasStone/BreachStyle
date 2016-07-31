<?php
Route::get('admin/settings', 'SettingsController@index')->name('admin.setting.index');
Route::post('admin/settings/create' ,'SettingsController@store')->name('admin.setting.store');
Route::post('admin/settings/upload', 'SettingsController@upload')->name('admin.setting.upload');
Route::post('admin/settings/crop', 'SettingsController@crop')->name('admin.setting.crop');
Route::post('admin/settings/get', 'SettingsController@get')->name('admin.setting.get');
Route::get('admin/settings/delete/{link}', 'SettingsController@delete')->name('admin.setting.delete');