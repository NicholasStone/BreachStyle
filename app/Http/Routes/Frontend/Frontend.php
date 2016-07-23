<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
//        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
//        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::get('profile', 'ProfileController@show')->name('frontend.user.profile.detail');
        Route::post('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
        Route::post('profile/join', 'ProfileController@join')->name('frontend.user.profile.join');
    });
});