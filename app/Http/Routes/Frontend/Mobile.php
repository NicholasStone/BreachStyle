<?php
Route::group(['prefix' => 'm'], function () {
    Route::get('a/', 'MobileController@applications')->name('frontend.m.index');
    Route::post('a/{type?}', 'MobileController@applicationsList')->name('frontend.m.index.data');

    Route::get('b', 'Party\BranchController@index_m')->name('frontend.m.branch.index');
    Route::post('b', 'MobileController@branches')->name('frontend.m.branch.data');
    Route::get('b/detail/{id}', 'Party\BranchController@show_m')->name('frontend.m.branch.show');
});