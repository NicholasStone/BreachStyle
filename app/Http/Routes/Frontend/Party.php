<?php
Route::group(['namespace' => 'Party',], function () {
    Route::group(['prefix' => 'branch'], function () {
        Route::get('index', 'BranchController@index')->name('frontend.branch.index');
        Route::get('bind', 'BranchController@show')->name('frontend.branch.bind');
        Route::post('bind', 'BranchController@update')->name('frontend.branch.update');
        Route::get('establish', 'BranchController@create')->name('frontend.branch.establish');
        Route::post('create', 'BranchController@store')->name('frontend.branch.create');
    });

    Route::group(['prefix' => 'course'], function () {

    });

    Route::group(['prefix' => 'case'], function () {

    });

    Route::group(['prefix' => 'recommend'], function () {
        Route::group(['prefix' => 'instructor'], function (){

        });
        Route::group(['prefix' => 'student'], function (){

        });
    });

});